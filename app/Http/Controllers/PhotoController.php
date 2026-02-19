<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $path = $request->file('image')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'image' => $path
        ]);

        return back()->with('success', 'Foto berhasil diupload');
    }

    public function index()
{
    $photos = Photo::latest()->get();
    return view('index', compact('photos'));
}

}
