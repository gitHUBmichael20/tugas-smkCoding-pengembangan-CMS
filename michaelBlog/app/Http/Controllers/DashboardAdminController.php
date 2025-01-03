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
        try {
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
                return redirect()->back()->with('success', 'Proses menambah galeri berhasil dijalankan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambah galeri: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'captions' => 'required|string'
            ]);

            $gallery = Gallery::findOrFail($id);
            $gallery->update([
                'title' => $request->title,
                'image' => $request->image,
                'author' => $request->author,
                'captions' => $request->captions,
            ]);

            return redirect()->back()->with('success', 'Proses mengubah galeri berhasil dijalankan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengubah galeri: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            return redirect()->back()->with('success', 'Proses menghapus galeri berhasil dijalankan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus galeri: ' . $e->getMessage());
        }
    }
}