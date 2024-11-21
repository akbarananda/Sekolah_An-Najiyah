<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('Admin/berita', compact('berita'));
    }


    public function create()
    {
        return view('Admin/Berita/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        } else {
            $imagePath = null;
        }

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'News created successfully.');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
    return view('Admin/Berita/view', compact('berita'));
    }

    public function edit($id)
    {
        // Edit a single user
        $berita = Berita::findOrFail($id);
    return view('Admin/Berita/edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $berita = Berita::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($berita->image && file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }
            // Upload gambar baru
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $berita->image = 'images/' . $imageName;
    }

    $berita->judul = $request->judul;
    $berita->deskripsi = $request->deskripsi;
    $berita->save();

    return redirect()->route('admin.berita.index')->with('success', 'News updated successfully.');

    }

    public function destroy($id)
    {
        $berita = Berita::find($id);

            if ($berita) {
                $berita->delete();
                return redirect()->route('admin.berita.index')->with('success', 'Data has been deleted');
            } else {
        return redirect()->route('admin.berita.index')->with('error', 'Data not found');
        }
    }
}
