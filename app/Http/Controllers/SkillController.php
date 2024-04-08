<?php
  
namespace App\Http\Controllers;
   
use App\Models\Skills;
use Illuminate\Http\Request;
  
class SkillController extends Controller
{
    public function index()
    {
        $skill = Skills::orderBy('created_at', 'DESC')->get();
  
        return view('skills.index', compact('skill'));
    }
  
    
    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $skill = new Skills();

        $skill->language_name = $request->input('language_name');
        $skill->percent = $request->input('percent');

        $skill->save();

        return redirect()->route('skills.index')->with('success', 'Skill has been created successfully');
    }

    public function show(string $id)
    {
        $skill = Skills::findOrFail($id);
  
        return view('skills.show', compact('skill'));
    }

    public function edit(string $id)
    {
        $skill = Skills::findOrFail($id);
  
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        $skill = Skills::findOrFail($id);

        $skill->language_name = $request->input('language_name');
        $skill->percent = $request->input('percent');

        $skill->save();

        return redirect()->route('skills.index')->with('success', 'Skill has been updated successfully');
    }

    public function destroy(string $id)
    {
        $skill = Skills::findOrFail($id);
  
        $skill->delete();
  
        return redirect()->route('skills.index')->with('success', 'Skill has been deleted successfully');
    }
}