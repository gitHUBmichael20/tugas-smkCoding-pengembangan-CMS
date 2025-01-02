<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //

    public function index()
    {
        $galleries = Gallery::all();
        return view('dashboard-admin.dashboard-admin', compact('galleries'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'captions' => 'nullable|string',
        ]);

        $gallery = Gallery::create([
            'title' => $request->title,
            'image' => $request->image,
            'author' => $request->author,
            'captions' => $request->captions
        ]);

        try {
                
            $gallery->save();
            session()->flash('success', 'Image posted successfully!');            
            return redirect()->back();
        
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to post image. Please try again.');

            return redirect()->back();
        }
    }

    
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|string',
            'author' => 'required|string|max:255',
            'caption' => 'required|string|max:500',
        ]);

        
        $gallery = Gallery::findOrFail($id);

        
        $gallery->title = $validatedData['title'];
        $gallery->image = $validatedData['image'];
        $gallery->author = $validatedData['author'];
        $gallery->captions = $validatedData['caption'];
        $gallery->save();

        
        return redirect()->back()->with('success', 'Gallery updated successfully!');
    }
}
