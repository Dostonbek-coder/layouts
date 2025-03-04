<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', function () {
    return view('welcome');
});

  Route::get('/about',[SiteController::class,'about'])->name('about');
  Route::get('/contact',[SiteController::class,'contact'])->name('contact');
  Route::get('/detalies',[SiteController::class,'detalies'])->name('detalies');
  Route::get('/listing',[SiteController::class,'listing'])->name('listing');