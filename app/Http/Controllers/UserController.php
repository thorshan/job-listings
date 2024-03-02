<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return view("admin.users.index", [
            "users" => User::all(),
        ]);
    }

    public function show(User $user)
    {
        //
        return view("admin.users.show", [
            "user" => User::findOrFail($user->id),
        ]);
    }

    //
    public function dashboard()
    {
        return view("admin.index");
    }

    //
    public function register()
    {
        //
        return view("register");
    }

    //
    public function create(Request $request, User $user)
    {
        //
        $formData = $request->validate([
            "name" => "required|min:5",
            "email" => ["required", "email", Rule::unique("users")],
            "password" => "required|min:5",
        ]);

        $user = new User();
        $user->name = $formData["name"];
        $user->email = $formData["email"];
        $user->password = $formData["password"];

        $user->save();
        auth()->login($user);

        // Assign Default User Role
        $userRole = new UserRole();
        $userRole->user_id = $user->id;
        $userRole->role_id = 3;

        $userRole->save();

        return redirect()
            ->route("listings")
            ->with("success", "User created successfully.");
    }

    public function update(Request $request, User $user)
    {
        //
        $formData = $request->validate([
            "name" => "required|min:5",
            "email" => ["required", "email", Rule::unique("users")],
        ]);

        $user->name = $formData["name"];
        $user->email = $formData["email"];

        $user->save();

        return redirect()
            ->route("profile")
            ->with("success", "User updated successfully.");
    }

    //
    public function login()
    {
        //
        return view("login");
    }

    //
    public function authenticate(Request $request)
    {
        //
        $formData = $request->validate([
            "email" => "email|required",
            "password" => "required|min:5",
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect()
                ->route("listings")
                ->with("success", "User logged in successfully.");
        }

        return back()
            ->withErrors(["email" => "invalid creadentials"])
            ->onlyInput("email");
    }

    // Logout
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()
            ->route("listings")
            ->with("success", "Logout successfully");
    }

    // Delete User
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        $user->delete();

        return redirect()
            ->route("users")
            ->with("success", "User deleted successfully.");
    }
}
