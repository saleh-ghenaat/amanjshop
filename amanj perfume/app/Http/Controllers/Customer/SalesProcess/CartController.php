<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use App\Models\Market\Order;
use Illuminate\Http\Request;
use App\Models\Market\Product;
use App\Models\Market\CartItem;
use App\Models\Market\Delivery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Market\CommonDiscount;
use Illuminate\Validation\Rules\Exists;

class CartController extends Controller
{
    public function cart()
    {
        if(Auth::check())
        {
            $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
            $delivery_methods = Delivery::all();
            // $relatedProducts = Product::all();
            return view('customer.sales-process.cart', compact('cartItems' , 'delivery_methods'));
        }
        else{
            return redirect()->route('auth.customer.login-register-form');
        }
    }

    public function updateCart(Request $request)
    {


        $user = auth()->user();
        $inputs = $request->all();
        $cartItems = CartItem::where('user_id', $user->id)->get();
        foreach($cartItems as $cartItem){
                $cartItem->update(['number' => $inputs['number'][$cartItem->id] , 'guarantee_id' => $inputs['guarantee'][$cartItem->id]]);

        }
         //calc price
        $totalProductPrice = 0;
        $totalDiscount = 0;
        $totalFinalPrice = 0;
        $totalFinalDiscountPriceWithNumbers = 0;
        foreach ($cartItems as $cartItem)
        {
            $totalProductPrice += $cartItem->cartItemProductPrice();
            $totalDiscount += $cartItem->cartItemProductDiscount();
            $totalFinalPrice += $cartItem->cartItemFinalPrice();
            $totalFinalDiscountPriceWithNumbers += $cartItem->cartItemFinalDiscount();
        }

        //commonDiscount
        $commonDiscount = CommonDiscount::where([['status', 1], ['end_date', '>', now()], ['start_date', '<', now()]])->first();
        if($commonDiscount)
        {
             $commonPercentageDiscountAmount = $totalFinalPrice * ($commonDiscount->percentage / 100);
             if($commonPercentageDiscountAmount > $commonDiscount->discount_ceiling)
             {
                $commonPercentageDiscountAmount = $commonDiscount->discount_ceiling;
             }
             if($commonDiscount != null and $totalFinalPrice >= $commonDiscount->minimal_order_amount)
             {
                $finalPrice = $totalFinalPrice - $commonPercentageDiscountAmount;
             }
             else{
                $finalPrice = $totalFinalPrice;
             }
        }
        else{
            $commonPercentageDiscountAmount = null;
            $finalPrice = $totalFinalPrice;
        }

        $delivery = Delivery::find($request->delivery_id);
        $inputs['delivery_amount'] = $delivery->amount;
        $inputs['user_id'] = $user->id;
        $inputs['order_final_amount'] = $finalPrice + $delivery->amount;
        $inputs['order_discount_amount'] = $totalFinalDiscountPriceWithNumbers;
        $inputs['order_common_discount_amount'] = $commonPercentageDiscountAmount;
        $inputs['order_total_products_amount'] = $totalProductPrice;
        $inputs['order_total_products_discount_amount'] = $inputs['order_discount_amount'] + $inputs['order_common_discount_amount'];


        $order = Order::updateOrCreate(
            ['user_id' => $user->id, 'order_status' => 0],
            $inputs
        );

        return redirect()->route('customer.sales-process.payment');
    }






    public function addToCart(Product $product, Request $request)
    {
        if(Auth::check())
        {
            $request->validate([
                'color' => 'nullable|exists:product_colors,id',
                'guarantee' => 'nullable|exists:guarantees,id',
                'number' => 'numeric|min:1|max:5'
            ]);

            $cartItems = CartItem::where('product_id', $product->id)->where('user_id', auth()->user()->id)->get();

            if(!isset($request->color))
            {
                $request->color = null;
            }
            if(!isset($request->guarantee))
            {
                $request->guarantee = null;
            }

                foreach($cartItems as $cartItem)
                {
                    if($cartItem->color_id == $request->color && $cartItem->guarantee_id == $request->guarantee)
                    {
                        if($cartItem->number != $request->number)
                        {
                            if($request->number != null){
                                $cartItem->update(['number' => $request->number]);

                            }else{
                                $cartItem->update(['number' => $cartItem->number +1]);
                            }
                        }
                        return back();
                    }
                }

                $inputs = [];
                $inputs['color_id'] = $request->color;
                $inputs['guarantee_id'] = $request->guarantee;
                $inputs['user_id'] =  auth()->user()->id;
                $inputs['product_id'] =  $product->id;

                CartItem::create($inputs);

                return back()->with('alert-section-success', 'محصول مورد نظر با موفقیت به سبد خرید اضافه شد');

        }
        else{
            return redirect()->route('auth.customer.login-register-form');
        }
    }


    public function removeFromCart(CartItem $cartItem)
    {
       if($cartItem->user_id === Auth::user()->id)
       {
        $cartItem->delete();
       }
       return back();
    }
}
