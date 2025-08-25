@extends('layouts.main')

@section('title', 'Galeri - Only Cars')

@section('content')
<div class="max-w-2xl mx-auto p-6 mt-28 pb-20">
    <!-- Card ala Instagram -->
    <div class="bg-white shadow-lg rounded-2xl border border-gray-200 overflow-hidden">
        
        <!-- Header ala IG -->
        <div class="flex items-center px-4 py-3">
            <img src="../assets/455892908_485533274111221_5733917450015794099_n.jpg" alt="" class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold">
            <div class="ml-3">
                <p class="text-sm font-semibold text-gray-800">Only Cars</p>
            </div>
        </div>

        <!-- Foto -->
        <img src="{{ asset('storage/' . $galeri->gambar_mobil) }}" 
             alt="{{ $galeri->nama_mobil }}" 
             class="w-full object-cover max-h-[500px]">

        <!-- Caption -->
        <div class="px-4 pb-4 space-y-2">
    <p class="text-xl font-semibold text-gray-800 pt-8">
        {{ $galeri->nama_mobil }}
    </p>
</div>


        <!-- Tombol Aksi CRUD -->
        <div class="px-4 py-3 border-t flex gap-3">
            <a href="{{ route('galeri.edit', $galeri->id) }}" 
               class="flex-1 text-center px-4 py-2 bg-indigo-500 text-white rounded-xl hover:bg-indigo-600 transition">
                ✏️ Edit
            </a>
            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="w-full px-4 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 transition">
                    🗑️ Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
