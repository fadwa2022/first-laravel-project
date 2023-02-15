<?php

use App\Http\Controllers\ListingController;
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

//common resource routes
// index- show all  listings
// show -show single listing
// create -show forme to creat listing
// store -store new listing
// edit -show  form to edit
// update -update listing
// destroy -delete listing


//all listing
Route::get('/', [ListingController::class, 'index']);
//single listing
Route::get('/listings/{listing}',[ListingController::class,'show']);



