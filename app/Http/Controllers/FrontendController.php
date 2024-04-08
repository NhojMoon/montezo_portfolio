<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\MyBlogs;
use App\Models\Works;
use App\Models\Skills;

class FrontendController extends Controller
{
    public function index()
    {
        // Fetch users with the role of admin
        $admin = User::where('role', 'admin')->get();
        $skills = Skills::all();
        $works = Works::all();
        $educations = Educations::all();
        $experiences = Experiences::all();
        $myblogs = MyBlogs::all();
        

        return view('welcome', ['admin' => $admin, 'skills' => $skills, 'works' => $works, 'educations' => $educations, 'experiences' => $experiences, 'myblogs' => $myblogs]);
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
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
