<?php

use App\Models\Listing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
// show create form
Route::get('/listings/create', [ListingController::class, 'create']);
//store listings data
Route::post('/listings',[ListingController::class,'store']);
//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);
// edit submit
Route::put('/listings/{listing}',[ListingController::class,'update']);
//delete listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy']);

//single listing
Route::get('/listings/{listing}',[ListingController::class,'show']);

//Show register /create form
Route::get('/register',[UserController::class,'create']);
//dtore user
Route::post('/users', [UserController::class, 'store']);

