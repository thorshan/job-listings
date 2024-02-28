<?php

namespace App\Http\Controllers\admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('company.index', ['companies' => Company::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('company.create', ['categories' => Category::all(), 'users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formData = $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id', // Assuming 'categories' is your categories table
            'user_id' => 'required|exists:users,id', // Assuming 'users' is your users table
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Adjust mime types and max size as needed
            'email' => 'required|email',
            'website' => 'required',
            'description' => 'required',
            'company_type' => 'required',
            'slogan' => 'required',
            'status' => 'required',
        ]);

        $company = new Company();
        $company->category_id = $formData['category_id'];
        $company->user_id = $formData['user_id'];
        $company->name = $formData['name'];
        $company->email = $formData['email'];
        $company->website = $formData['website'];
        $company->slogan = $formData['slogan'];
        $company->description = $formData['description'];
        $company->company_type = $formData['company_type'];
        $company->status = $formData['status'];

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;

            // Move the file to the "public/uploads" directory
            $file->move(public_path('uploads'), $fileName);

            // Update the file path in the database
            $company->image = 'uploads/' . $fileName;
        }

        $company->user_id = auth()->user()->id;

        $company->save();

        return redirect()->route('company.index')->with('success', "Company created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        return view('company.show', ['company' => Company::find($company->id), 'categories' => Category::all(), 'users' => User::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('company.edit', ['company' => Company::find($company->id), 'categories' => Category::all(), 'users' => User::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
        $formData = $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id', // Assuming 'categories' is your categories table
            'user_id' => 'required|exists:users,id', // Assuming 'users' is your users table
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg', // Adjust mime types and max size as needed
            'email' => 'required|email',
            'website' => 'required',
            'description' => 'required',
            'company_type' => 'required',
            'slogan' => 'required',
            'status' => 'required',
        ]);

        $company->category_id = $formData['category_id'];
        $company->user_id = $formData['user_id'];
        $company->name = $formData['name'];
        $company->email = $formData['email'];
        $company->website = $formData['website'];
        $company->slogan = $formData['slogan'];
        $company->description = $formData['description'];
        $company->company_type = $formData['company_type'];
        $company->status = $formData['status'];

        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            $file = $request->file("image");
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
    
            // Store the file in the "public/uploads" directory
            $file->storeAs('uploads', $fileName, 'public');
    
            // Update the file path in the database
            $company->image = 'uploads/' . $fileName;
        }
        $company->save();

        $company->user_id = auth()->user()->id;

        return redirect()->route('company.index')->with('success', "Company updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        $company = Company::find($company->id);
        $company->delete();
        return redirect()->route('company.index')->with('success', "Company deleted successfully.");
    }
}
