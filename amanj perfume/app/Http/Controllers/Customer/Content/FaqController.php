<?php

namespace App\Http\Controllers\Customer\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        return view('customer.content.faq');
    }
}
