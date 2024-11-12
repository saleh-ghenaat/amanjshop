<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Profile\UpdateProfileRequest;
use App\Models\City;
use App\Models\Market\Order;
use App\Models\Province;

class ProfileController extends Controller
{
    public function index()
    {    
        $orders = Order::orderBy('id', 'desc')->Paginate(5);
        return view('customer.profile.profile', compact('orders'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $inputs = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_code' => $request->national_code
        ];
        $user = auth()->user();
        $user->update($inputs);
        return redirect()->route('customer.profile.profile')->with('success', 'حساب کاربری با موفقیت ویرایش شد');
    }
    public function edit(){
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.profile.edit-profile',compact('provinces','cities'));
    }
}
