<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
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

        $gallery = new Gallery([
            'title' => $request->title,
            'image' => $request->image,
            'author' => $request->author,
            'captions' => $request->captions,
        ]);

        if ($gallery->save()) {
            return redirect()->back()->with('success', 'Image posted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to post image. Please try again.');
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

    public function destroy($id)
    {
        try {
            
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            return response()->json(['message' => 'Gallery deleted successfully'], 200);
        } catch (\Exception $e) {
            
            return response()->json(['error' => 'Failed to delete gallery'], 500);
        }
    }
}
