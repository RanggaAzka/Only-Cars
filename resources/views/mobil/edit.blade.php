@extends('layouts.main')

@section('content')
<div class="bg-white rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form</h2>
    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5 justify-center">
      @csrf
      @method('PUT')
      <div>
        <label for="name" class="block text-gray-700 font-medium mb-1 max-w-xl">Nama Motor</label>
        <input type="text" id="nama_mobil" value="{{ $mobil->nama_mobil }}" name="nama_mobil" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukkan nama Mobil" required />
      </div>
      <div>
        <label for="price" class="block text-gray-700 font-medium mb-1">Harga Mobil</label>
        <input type="number" id="harga_mobil" value="{{ $mobil->harga_mobil }}" name="harga_mobil" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukan Harga Mobil" required />
      </div>
      <div>
        <label for="year" class="block text-gray-700 font-medium mb-1">Tahun Mobil</label>
        <input type="number" id="tahun_mobil" value="{{ $mobil->tahun_mobil }}" name="tahun_mobil" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukan Tahun Mobil" required />
      </div>
     <div>
        <label for="mileage" class="block text-gray-700 font-medium mb-1">Kilometer Mobil</label>
        <input type="number" id="km_mobil" value="{{ $mobil->km_mobil }}" name="km_mobil" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukan Kilometer Mobil" required />
      </div>
      <div>
        <label for="image" class="block text-gray-700 font-medium mb-1">Gambar Mobil</label>
        <input type="file" name="gambar_mobil" id="gambar_mobil" accept=".jpg, .jpeg, .png" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukan Kilometer Mobil" required />
      </div>
        <button type="submit" class="w-50 bg-indigo-500 text-white py-2 rounded-xl hover:bg-indigo-600 transition duration-200">
          Kirim 
        </button>
      </div>
    </form>
  </div>
  @endsection
  