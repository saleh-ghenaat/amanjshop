<?php

namespace App\Http\Controllers\Customer\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('customer.content.about-us');
    }
}
