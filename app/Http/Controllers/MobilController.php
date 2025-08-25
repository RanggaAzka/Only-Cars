<?php

namespace App\Http\Controllers;

use App\Models\MobilOnly;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $mobil = MobilOnly::all();
         return view('/mobil', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //  dd($request->all());
            $validatedata = $request->validate([
            "nama_mobil" => "required|string",
            "harga_mobil" => "required|numeric",
            "km_mobil" => "required|integer",
            "tahun_mobil" => "required|integer",
            "gambar_mobil" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('MobilOnlyimages','public');
            $validatedata['gambar_mobil'] = $path;
        }

        MobilOnly::create($validatedata);
        return redirect('mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $mobil = MobilOnly::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $mobil = MobilOnly::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $mobil = MobilOnly::findOrFail($id);  

          $validatedata = $request->validate([
            "nama_mobil" => "required|string",
            "harga_mobil" => "required|numeric",
            "km_mobil" => "required|integer",
            "tahun_mobil" => "required|integer",
            "gambar_mobil" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('MobilOnlyimages','public');
            $validatedata['gambar_mobil'] = $path;
        }

        $mobil->update($validatedata);
        return redirect('mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = MobilOnly::findOrFail($id);
         $mobil->delete();
         return redirect('mobil');
    }
}
