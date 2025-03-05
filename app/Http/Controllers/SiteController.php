<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
 public function about()
 {
    return view('about');
 }
 public function contact()
 {
    return view('contact');
 }
 public function detalies()
 {
    return view('detalies');
 }

 public function listing()
 {
return view('listing');
 }

}
