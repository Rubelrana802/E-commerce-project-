<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	return view('FontEnd.home.homeContent');
    }

    public function category(){
    	return view('FontEnd.category.categoryContent');
    }

    public function womenwear(){
        return view('FontEnd.womenwear.womenwearContent');
    }

    public function contact(){
    	return view('FontEnd.contact.contactContent');
    }

    public function productDetails(){
    	return view('FontEnd.product.productContent');
    }


    public function electronic(){
        return view('FontEnd.electronic.electronicContent');
    }

    public function shortcode(){
        return view('FontEnd.shortcode.shortcodeContent');
    }
}
