<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\MyBlogs;
use App\Models\Works;
use App\Models\Skills;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $experiencesCount = Experiences::count();
        $educationsCount = Educations::count();
        $myblogsCount = MyBlogs::count();
        $worksCount = Works::count();
        $skillsCount = Skills::count();

        return view('home', compact('userCount','experiencesCount','educationsCount','myblogsCount','worksCount','skillsCount'));
    }
}
