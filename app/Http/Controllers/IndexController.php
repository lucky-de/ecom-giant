<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact_us(){
        
        return view('web.contact-us');
    }


    public function categories(){

        return view('web.categories');
    	
    }


    public function about_us(){
        return view('web.about-us');
    	
    }


    public function make_money(){
        return view('web.make-money');
    	
    }


    public function terms_and_condition(){

        return view('web.terms-and-conditions');
    	
    }

     public function todays_deals(){
    
      return view('web.todays-deals');
	
    }
}
