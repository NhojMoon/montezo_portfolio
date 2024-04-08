<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        //
    }    

    public function create()
    {
        //
    }
  
    public function store(Request $request)
    {
        //
    }
  
    public function show(string $id)
    {
        //
    }
  
    public function edit(string $id)
    {
        $profiles = User::findOrFail($id);
  
        return view('profiles.edit', compact('profiles'));
    }
  
    public function update(Request $request, string $id)
    {
        $profiles = User::findOrFail($id);
  
        $profiles->role = $request->input('role');
        $profiles->name = $request->input('name');
        $profiles->email = $request->input('email');
        $profiles->job = $request->input('job');
        $profiles->birthday = $request->input('birthday');
        $profiles->age = $request->input('age');
        $profiles->gender = $request->input('gender');
        $profiles->phone = $request->input('phone');
        $profiles->address = $request->input('address');
        $profiles->religion = $request->input('religion');
        $profiles->status = $request->input('status');
        $profiles->description = $request->input('description');
        $profiles->fb_url = $request->input('fb_url');
        $profiles->instagram_url = $request->input('instagram_url');
        $profiles->linkedin_url = $request->input('linkedin_url');
        $profiles->github_url = $request->input('github_url');

        if($request->hasFile('avatar'))
        {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $profiles->avatar = $avatarPath;
        }

        $profiles->save();
  
        return redirect()->route('home')->with('success', 'User has been updated successfully');
    }
  
    public function destroy(string $id)
    {
        //
    }
}
