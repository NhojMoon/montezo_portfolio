<?php
  
namespace App\Http\Controllers;
   
use App\Models\Educations;
use Illuminate\Http\Request;
  
class EducationController extends Controller
{
    public function index()
    {
        $education = Educations::orderBy('created_at', 'DESC')->get();
  
        return view('educations.index', compact('education'));
    }
  
    public function create()
    {
        return view('educations.create');
    }

    public function store(Request $request)
    {
        $education = new Educations();

        $education->school_year = $request->input('school_year');
        $education->educational_stage = $request->input('educational_stage');
        $education->school_name = $request->input('school_name');
        $education->school_description = $request->input('school_description');

        $education->save();

        return redirect()->route('education.index')->with('success', 'Educational Background has been created successfully');
    }

    public function show(string $id)
    {
        $education = Educations::findOrFail($id);
  
        return view('educations.show', compact('education'));
    }

    public function edit(string $id)
    {
        $education = Educations::findOrFail($id);
  
        return view('educations.edit', compact('education'));
    }

    public function update(Request $request, string $id)
    {
        $education = Educations::findOrFail($id);

        $education->school_year = $request->input('school_year');
        $education->educational_stage = $request->input('educational_stage');
        $education->school_name = $request->input('school_name');
        $education->school_description = $request->input('school_description');

        $education->save();

        return redirect()->route('education.index')->with('success', 'Educational Background has been updated successfully');
    }

    public function destroy(string $id)
    {
        $education = Educations::findOrFail($id);
  
        $education->delete();
  
        return redirect()->route('education.index')->with('success', 'Educational Background has been deleted successfully');
    }
}