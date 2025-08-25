@extends('layouts.main')

@section('title', 'Only Cars - Galeri')

@section('content')
    

{{-- Layout Galeri --}}
<div class="min-h-screen bg-gray-100 p-6">
    
    {{-- Header --}}
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mt-20">GALERI</h1>
        <a href="{{ route('galeri.create') }}" 
           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out mt-20">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5 mr-2" fill="none" 
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 4v16m8-8H4" />
            </svg>
            Tambah
        </a>
    </div>

    {{-- Grid Galeri --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-15">
        @forelse($galeri as $g)
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transform hover:-translate-y-2 transition duration-300">
                <a href="{{ route('galeri.show', $g->id) }}">
                    <div class="overflow-hidden">
                        <img src="{{ asset('storage/'.$g->gambar_mobil) }}" 
                             alt="{{ $g->nama_mobil }}" 
                             class="w-full h-64 object-cover hover:scale-110 transition duration-500">
                    </div>
                </a>
            </div>
        @empty
            <div class="col-span-full text-center py-10 text-gray-500">
                Belum ada data galeri mobil.
            </div>
        @endforelse
    </div>

</div>


@endsection