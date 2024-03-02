<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Listing $listing){
        return view('index', [
            'listings' => Listing::latest()->get(), 
            'company' => Company::find($listing->id)
        ]);
    }

    //
    public function search(Request $request, Listing $listing)
    {
        $searchTerm = $request->input('search');

        $listings = Listing::where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('tag', 'like', '%' . $searchTerm . '%')
            ->get();

        return view('index', [
            'listings' => $listings, 
            'company' => Company::find($listing->id)
        ]);
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }

    public function recruit(){
        return redirect()->route('dashboard');
    }
}
