<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Models\Province;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        return view('customer.profile.my-addresses');
    }
}
