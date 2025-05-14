<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZfoodController extends Controller
{
    public function homepage(){
        return view('zfood.home');
    }

    public function aboutpage(){
        return view('zfood.about');
    }

    public function menupage(){
        return view('zfood.menu');
    }

   public function bookingpage(){
    return view ('zfood.booking');
   }
   public function chefpage(){
    return view ('zfood.chef');
   }

    public function blogpage(){
    return view('zfood.blog');
  }

   public function contactpage(){
    return view ('zfood.contact');
  }

  public function featurepage(){
    return view('zfood.feature');
 }

}
