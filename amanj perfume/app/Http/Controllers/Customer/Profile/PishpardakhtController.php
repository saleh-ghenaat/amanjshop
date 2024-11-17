<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Services\Payment\PaymentService;
use App\Http\Services\Payment\PishpardakhtService;
use App\Models\Market\Brand;
use App\Models\Market\CartItem;
use App\Models\Market\OnlinePayment;
use App\Models\Market\Order;
use App\Models\Market\OrderItem;
use App\Models\Market\Payment;
use App\Models\Market\Pishpardakht;
use App\Models\Market\Product;
use App\Models\Market\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PishpardakhtController extends Controller
{
    public function index()
    {
        return view('customer.profile.pishpardakht');
    }
    public function store(Request $request, PishpardakhtService $PishpardakhtService)
    {
        $inputs = $request->all();
        $inputs['user_id'] =  Auth::user()->id;
        $pishpardakhts = Pishpardakht::create($inputs);
        $pishpardakht = Pishpardakht::where('user_id', Auth::user()->id)->get()->first();
        $targetModel = OnlinePayment::class;
       
        $paymented = $targetModel::create([
            'amount' => $request->price,
            'user_id' => auth()->user()->id,
            'pay_date' => now(),
            'status' => 1,
        ]);
        

        $PishpardakhtService->zarinpal($request->price, $pishpardakht,$paymented);
    }
    public function pishpardakhtCallback(Pishpardakht $pishpardakht, OnlinePayment $onlinePayment, PaymentService $paymentService)
    {
        $amount = $onlinePayment->amount * 10;
        $result = $paymentService->zarinpalVerify($amount, $onlinePayment);
        $pishpardakhts = Pishpardakht::where('user_id', Auth::user()->id)->get();

        dd('hi');

        if ($result['success']) {
            $pishpardakht->update(
                ['price_status' => 1]
            );

            return redirect()->route('customer.profile.pishpardakht')->with('success', 'پرداخت شما با موفقیت انجام شد');
        } else {
            $pishpardakht->update(
                ['price_status' => 0]
            );
            return redirect()->route('customer.profile.pishpardakht')->with('danger', 'سفارش شما با  خطا مواجه شد');
        }
    }
}
