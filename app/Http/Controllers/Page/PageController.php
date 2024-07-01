<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
        public function DocumentPageView(){
          return view('backend.document.documentation');
      //  return view('frontend.contact.contact');
    }

     public function ErrorPageView(){
          return view('frontend.document.404');
      //  return view('frontend.contact.contact');
    }
}
