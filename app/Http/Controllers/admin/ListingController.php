<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Listing;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("listings.index", ["listings" => Listing::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("listings.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Listing $listing)
    {
        //
        $formData = $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'exp' => 'required',
            'tag' => 'required',
            'location' => 'required',
            'description' => 'required',
            'requirements' => 'required',
        ]);

        $listing = new Listing();

        $listing->title = $formData['title'];
        $listing->salary = $formData['salary'];
        $listing->exp = $formData['exp'];
        $listing->tag = $formData['tag'];
        $listing->description = $formData['description'];
        $listing->location = $formData['location'];
        $listing->requirements = $formData['requirements'];

        $user = auth()->user();
        $listing->user_id = $user->id;

        // dd($user->id);
        $company = Company::find($user->id);
        $listing->company_id = $company->id;

        $listing->save();

        return redirect()->route('listing.index')->with('success', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
        return view('listings.edit', [
            'listing' => Listing::find($listing->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
        return view('listings.edit', [
            'listing' => Listing::find($listing->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
        $formData = $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'exp' => 'required',
            'tag' => 'required',
            'location' => 'required',
            'description' => 'required',
            'requirements' => 'required',
        ]);

        $listing->title = $formData['title'];
        $listing->salary = $formData['salary'];
        $listing->exp = $formData['exp'];
        $listing->tag = $formData['tag'];
        $listing->description = $formData['description'];
        $listing->location = $formData['location'];
        $listing->requirements = $formData['requirements'];

        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect()->route('listing.index')->with('success', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
        $listing = Listing::findOrFail($listing->id);
        $listing->delete();

        return redirect()->route('listing.index')->with('success', 'Listing deleted successfully!');
    }
}
