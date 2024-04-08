<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $admins = User::latest()->get();
        
        if ($admins->count() > 1) { 
            $admin = $admins->where('role', 'admin')->first();
            
            if($admin) {
                $admins = $admins->reject(function ($user) use ($admin) {
                    return $user->id === $admin->id;
                });
        
                $admins->prepend($admin);
            }
        }
        
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $admins = new User();

        $admins->role = $request->input('role');
        $admins->name = $request->input('name');
        $admins->email = $request->input('email');
        $admins->password = bcrypt($request->input('password'));

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admins->avatar = $avatarPath;
        }

        $admins->save();

        return redirect()->route('admin.index')->with('success', 'User has been created successfully');
    }

    public function show(string $id)
    {
        // Show individual users 
    }

    public function edit(string $id)
    {
        // Return view for editing a specific users
    }

    public function update(Request $request, string $id)
    {

        $admins = User::findOrFail($id);

        $admins->role = $request->input('role');
        $admins->name = $request->input('name');
        $admins->email = $request->input('email');

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admins->avatar = $avatarPath;
        }

        $admins->save();

        return redirect()->route('admin.index')->with('success', 'User has been updated successfully');
    }

    public function destroy(string $id)
    {
        $admins = User::findOrFail($id);
  
        if ($admins->isAdmin()) {
            return redirect()->route('admin.index')->with('success', 'ADMIN USER CANNOT BE DELETED!!');
        }
  
        $admins->delete();
  
        return redirect()->route('admin.index')->with('success', 'User has been deleted successfully');
    }
}
