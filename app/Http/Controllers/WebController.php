<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home(){
        return view("web.home");
    }
    public function shop(){
        return view("web.shop");
    }
    public function contact(){
        return view("web.contact");
    }
    public function bundles(){
        return view("web.bundles");
    }
    public function essentials(){
        return view("web.essentials");
    }
    public function discounts(){
        return view("web.discounts");
    }
    public function productdetails(){
        return view("web.productdetails");
    }
    

    
}
