<?php

namespace App\Http\Controllers;

use App\Models\Listing;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    // show alll istings
    // request for get from url
    public function index(Request $request)
    {
        // dd(request()->tag);or Request('tag')
        return view('listings\index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // show single listing

    public function show(Listing $listing)
    {
        return view('listings\show', [
            'listing' => $listing
        ]);
    }
    // show create form

    public function create()
    {
        return view('listings\create');
    }
    //store
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'discription' => 'required'
        ]);
        Listing::create($formFields);

        return redirect('/')->with('message','listing created successfully');
    }
}