<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.roles.index', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formData = $request->validate([
            'name' => 'required'
        ]);

        $role = new Role();
        $role->name = $formData['name'];

        $role->save();

        return redirect()->route('roles.index')->with('success', "Role created successfully.");
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
    public function edit(Role $role)
    {
        //
        return view('admin.roles.edit',[
            'role' => Role::findOrFail($role->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
        $formData = $request->validate([
            'name' => 'required'
        ]);

        $role->name = $formData['name'];

        $role->save();

        return redirect()->route('roles.index')->with('success', "Role updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        $role = Role::findOrFail($role->id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', "Role deleted successfully.");
    }
}
