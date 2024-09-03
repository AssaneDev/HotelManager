<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesFrontendController extends Controller
{
    //
    public function APropos(){
        return view('frontend.pages.a-propos');
    }

    public function Restaurant(){
        return view('frontend.pages.restaurant');

    }
}
