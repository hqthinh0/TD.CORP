<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function aboutController(){
         return view('about');

    } // end mehtod

    public function contactController(){
         return view('contact');

    } // end mehtod
}
