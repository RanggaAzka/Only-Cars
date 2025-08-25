@extends('layouts.main')

@section('title', 'Only Cars - Merchendise')

@section('content')
    
    <!-- <div class="max-w-4xl mx-auto p-6">
      <h1 class="text-2xl font-bold text-gray-800 mb-6 justify-content-center">Welcome To Only Cars</h1>
    </div> -->
     <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mt-20 ml-15">CARS</h1>
        <a href="{{ route('mobil.create') }}" 
           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out mt-20 mr-15">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5 mr-2" fill="none" 
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 4v16m8-8H4" />
            </svg>
            Tambah
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-15 mb-15">
        @foreach($mobil as $m)
            <div class="bg-white shadow-md rounded-2xl p-6 border border-gray-200">
               <a href="{{ route('mobil.show', $m->id) }}">
                <img src="{{ asset('storage/'.$m->gambar_mobil) }}" alt="" class="w-full  h-80 object-cover">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $m['nama_mobil'] }}</h2>
                <p class="text-gray-600"><span class="font-medium">Harga:</span> Rp {{ number_format($m['harga_mobil'], 0, ',', '.') }}</p>
                <p class="text-gray-600"><span class="font-medium">Tahun:</span> {{ $m['tahun_mobil'] }}</p>
                <p class="text-gray-600"><span class="font-medium">Kilometer:</span> {{ number_format($m['km_mobil'], 0, ',', '.')  }} km</p>
                </a>
            </div>  
        @endforeach
      </div>
@endsection