<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $tentang = [
            'judul' => 'Only Cars hadir untuk memberikan kendaraan terbaik dengan harga kompetitif dan pelayanan profesional.',
            'kami' => ' Berdiri sejak 2005, Only Cars telah menjadi salah satu showroom mobil terpercaya di Indonesia. 
        Kami menawarkan berbagai pilihan kendaraan baru dan bekas dengan kualitas terbaik.',
            'visi' => ' Visi kami adalah menjadi mitra terpercaya dalam memenuhi kebutuhan transportasi Anda, dengan selalu mengutamakan kepuasan pelanggan.',
            'hubungi' => 'Hubungi Kami'
        ];
         return view('about', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
