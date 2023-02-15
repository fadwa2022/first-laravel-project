<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//all listing
Route::get('/', function () {
    return view('listings',[
        'heading'=>'Lastest Listings',
        'listings'=>Listing::all()
    ]);
});
//single listing
Route::get('/listings/{listing}',function(Listing
   $listing){
    return view('listing',[
        'listing'=> $listing
    ]);
});
