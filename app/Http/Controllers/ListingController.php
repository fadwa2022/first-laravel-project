<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show alll istings
    // request for get from url
    public function index(Request $request){
        // dd(request()->tag);or Request('tag')
        return view('listings\index',[
            'listings' => Listing::latest()->filter(request(['tag']))->get()
       ]);
    }

    // show single listing

    public function show(Listing $listing){
        return view('listings\show',[
            'listing' => $listing
        ]);
    }
}
