<?php

namespace App\Http\Controllers;

use App\Models\MyBlogs;
use Illuminate\Http\Request;

class MyBlogController extends Controller
{

    public function index()
    {
        $myblog = MyBlogs::orderBy('created_at','DESC')->get();
    
        return view('myblogs.index', compact('myblog'));
    }
     
    public function create()
    {
        return view('myblogs.create');
    }
    
    public function store(Request $request)
    {
        $myblog = new MyBlogs();

        $myblog->avatar = $request->avatar;
        $myblog->caption = $request->caption;
        $myblog->date = $request->date;
        $myblog->author = $request->author;
        $myblog->content = $request->content;

        if($request->hasFile('avatar'))
        {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $myblog->avatar = $avatarPath;
        }

        $myblog->save();

     
        return redirect()->route('myblog.index')->with('success','My Blog has been created successfully.');
    }
     
    public function show(MyBlogs $myblog)
    {
        return view('myblog.show',compact('myblog'));
    } 
     
    public function edit(MyBlogs $myblog)
    {
        return view('myblogs.edit',compact('myblog'));
    }
    
    public function update(Request $request, $id)
    {
        
        $myblog = MyBlogs::findOrFail($id);

        $myblog->avatar = $request->avatar;
        $myblog->caption = $request->caption;
        $myblog->date = $request->date;
        $myblog->author = $request->author;
        $myblog->content = $request->content;

        if($request->hasFile('avatar'))
        {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $myblog->avatar = $avatarPath;
        }

        $myblog->save();
    
        return redirect()->route('myblog.index')->with('success','My Blog Has Been updated successfully');
    }
    
    public function destroy(MyBlogs $myblog)
    {
        $myblog->delete();
    
        return redirect()->route('myblog.index')->with('success','My Blog has been deleted successfully');
    }
}
