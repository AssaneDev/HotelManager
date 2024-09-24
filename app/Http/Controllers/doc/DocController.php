<?php

namespace App\Http\Controllers\doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocController extends Controller
{
    //
    public function Doc(){
        return view('frontend.doc.doc');
    }

    public function HotelGes(){
        return view('frontend.doc.leanding');
    }
}
