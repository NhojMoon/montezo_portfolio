<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;
use Nette\Schema\Expect;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experiences::orderBy('created_at', 'DESC')->get();
  
        return view('experiences.index', compact('experience'));
    }
  
    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $experience = new Experiences();

        $experience->year = $request->input('year');
        $experience->job_title = $request->input('job_title');
        $experience->company = $request->input('company');
        $experience->duty = $request->input('duty');

        $experience->save();

        return redirect()->route('experience.index')->with('success', 'Experience has been created successfully');
    }

    public function show(string $id)
    {
        $experience = Experiences::findOrFail($id);
  
        return view('experiences.show', compact('exprience'));
    }

    public function edit(string $id)
    {
        $experience = Experiences::findOrFail($id);
  
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, string $id)
    {
        $experience = Experiences::findOrFail($id);

        $experience->year = $request->input('year');
        $experience->job_title = $request->input('job_title');
        $experience->company = $request->input('company');
        $experience->duty = $request->input('duty');

        $experience->save();

        return redirect()->route('experience.index')->with('success', 'Experience has been updated successfully');
    }

    public function destroy(string $id)
    {
        $experience = Experiences::findOrFail($id);
  
        $experience->delete();
  
        return redirect()->route('experience.index')->with('success', 'Experience has been deleted successfully');
    }
}
