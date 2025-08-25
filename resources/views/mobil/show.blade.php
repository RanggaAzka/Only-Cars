@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Welcome to Only Cars
    </h1>

    <div class="bg-white shadow-md rounded-2xl p-6 border border-gray-200">
        <!-- Gambar Motor -->
        <img src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
             alt="{{ $mobil['nama_mobil'] }}" 
             class="w-full h-95 object-cover rounded-xl mb-4">

        <!-- Detail Motor -->
        <h2 class="text-xl font-semibold text-gray-800 mb-2">
            {{ $mobil['nama_mobil'] }}
        </h2>
        <p class="text-gray-600">
            <span class="font-medium">Harga:</span> 
            Rp {{ number_format($mobil['harga_mobil'], 0, ',', '.') }}
        </p>
        <p class="text-gray-600">
            <span class="font-medium">Tahun:</span> 
            {{ $mobil['tahun_mobil'] }}
        </p>
        <p class="text-gray-600">
            <span class="font-medium">Kilometer:</span> 
            {{ number_format($mobil['km_mobil'], 0, ',', '.') }} km
        </p>

        <!-- Tombol WhatsApp -->
        <a href="https://wa.me/6281234567890" 
           target="_blank" 
           class="block bg-green-500 text-white text-center py-2 rounded-xl mt-4 hover:bg-green-600 transition duration-200">
            💬 WhatsApp
        </a>

        <!-- Tombol Aksi -->
        <div class="flex items-center gap-4 mt-6">
            <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="w-full px-4 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 transition">
                     Hapus
                </button>
            </form>

            <a href="{{ route('mobil.edit', $mobil->id) }}" 
               class="px-4 py-2 bg-indigo-500 text-white rounded-xl hover:bg-indigo-600 transition duration-200">
                Edit Data
            </a>
        </div>
    </div>
</div>
@endsection
