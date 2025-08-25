@extends('layouts.main')

@section('content')
  <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Form Tambah Galeri</h2>

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="nama_mobil" class="block text-gray-700 font-medium mb-2">Judul</label>
                <input type="text" id="nama_mobil" value="{{ $galeri->nama_mobil }}" name="nama_mobil"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-400"
                    placeholder="Masukkan Judul" required />
            </div>

            <div>
                <label for="gambar_mobil" class="block text-gray-700 font-medium mb-2">Gambar</label>
                <input type="file" name="gambar_mobil" value="{{ $galeri->gambar_mobil }}" id="gambar_mobil" accept=".jpg, .jpeg, .png"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-400"
                    required />
            </div>

            <div class="text-center">
                <button type="submit"
                    class="px-8 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white text-lg font-semibold rounded-xl shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>

  @endsection
  