<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;

class WorkController extends Controller
{
    public function index()
    {
        $work = Works::orderBy('created_at','desc')->get();
    
        return view('works.index', compact('work'));
    }
     
    public function create()
    {
        return view('works.create');
    }
    
    public function store(Request $request)
    {

        $work = new Works;

        $work->name = $request->name;
        $work->link = $request->link;
        $work->type = $request->type;

        if ($request->hasFile('image')) {
            $avatarPath = $request->file('image')->store('image', 'public');
            $work->image = $avatarPath;
        }

        $work->save();

     
        return redirect()->route('work.index')->with('success','Work has been created successfully.');
    }
     
    public function show(Works $work)
    {
        return view('work.show',compact('work'));
    } 
     
    public function edit(Works $work)
    {
        return view('works.edit',compact('work'));
    }
    
    public function update(Request $request, $id)
    {
        
        $work = Works::findOrFail($id);

        $work->name = $request->name;
        $work->link = $request->link;
        $work->type = $request->type;

        if ($request->hasFile('image')) {
            $avatarPath = $request->file('image')->store('image', 'public');
            $work->image = $avatarPath;
        }

        $work->save();
    
        return redirect()->route('work.index')->with('success','Work Has Been updated successfully');
    }
    
    public function destroy(Works $work)
    {
        $work->delete();
    
        return redirect()->route('work.index')->with('success','Work has been deleted successfully');
    }
}
