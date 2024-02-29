<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.user-roles.index',[
            'user_roles' => UserRole::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user-roles.create',[
            'users' => User::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formData = $request->validate([
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        $userRole = new UserRole();
        $userRole->user_id = $formData['user_id'];
        $userRole->role_id = $formData['role_id'];

        $userRole->save();

        return redirect()->route('user-roles.index')->with('success', "User role created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserRole $userRole)
    {
        //
        return view('admin.user-roles.edit',[
            'users' => User::all(),
            'roles' => Role::all(),
            'user_role' => UserRole::findOrFail($userRole->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserRole $userRole)
    {
        //
        $formData = $request->validate([
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        $userRole->user_id = $formData['user_id'];
        $userRole->role_id = $formData['role_id'];

        $userRole->save();

        return redirect()->route('user-roles.index')->with('success', "User role updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserRole $userRole)
    {
        //
        $userRole = UserRole::findOrFail($userRole->id);
        $userRole->delete();

        return redirect()->route('user-roles.index')->with('success', "User role deleted successfully.");
    }
}
