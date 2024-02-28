<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Listing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Listing $listing){
        return view('index', ['listings' => Listing::all(), 'company' => Company::find($listing->id)]);
    }
}
