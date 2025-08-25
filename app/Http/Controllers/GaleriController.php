<?php

namespace App\Http\Controllers;

use App\Models\GaleriOnly;
use App\Models\MobilOnly;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $galeri = GaleriOnly::all();
         return view('/galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   dd($request->all());
            $validatedata = $request->validate([
            "nama_mobil" => "required|string",
            "gambar_mobil" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('MobilOnlyimages','public');
            $validatedata['gambar_mobil'] = $path;
        }

        GaleriOnly::create($validatedata);
        return redirect('galeri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $galeri = GaleriOnly::findOrFail($id);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $galeri = GaleriOnly::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $galeri = GaleriOnly::findOrFail($id);  

          $validatedata = $request->validate([
            "nama_mobil" => "required|string",
            "gambar_mobil" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('MobilOnlyimages','public');
            $validatedata['gambar_mobil'] = $path;
        }

        $galeri->update($validatedata);
        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $galeri = GaleriOnly::findOrFail($id);
         $galeri->delete();
         return redirect('galeri');
    }
}
