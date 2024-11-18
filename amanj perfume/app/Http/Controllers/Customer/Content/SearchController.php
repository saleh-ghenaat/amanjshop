<?php

namespace App\Http\Controllers\Customer\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        return view('customer.content.search');
    }
}
