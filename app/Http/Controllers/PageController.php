<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function humcareform()
   {
    return view('humcareform');
   }

   public function humcarecleanform()
   {
     return view('humcarecleanform');
   }

}
