<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
        public function about_us()
    {
       
       return view("home.about_us");
    }
    
         public function contact_us()
    {
       
       return view("home.contact_us");
    }
    
         public function privacy_policy()
    {
       
       return view("home.privacy_policy"); 
    }
         public function terms_conditions()
    {
       
       return view("home.terms_conditions"); 
    }
    
       public function renting_guide()
    {
       
       return view("home.renting_guide"); 
    }
    
    
}

