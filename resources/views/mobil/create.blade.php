@extends('layouts.main')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 py-12">
  <div class="w-full max-w-2xl bg-white rounded-2xl shadow-xl p-8">
    <!-- Title -->
    <h2 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">
      🚗 Tambah Data Mobil
    </h2>

    <!-- Form -->
    <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <!-- Nama Mobil -->
      <div>
        <label for="nama_mobil" class="block text-gray-700 font-semibold mb-2">Nama Mobil</label>
        <input type="text" id="nama_mobil" name="nama_mobil" 
               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500" 
               placeholder="Masukkan nama mobil" required>
      </div>

      <!-- Harga Mobil -->
      <div>
        <label for="harga_mobil" class="block text-gray-700 font-semibold mb-2">Harga Mobil (Rp)</label>
        <input type="number" id="harga_mobil" name="harga_mobil" 
               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500" 
               placeholder="Masukkan harga mobil" required>
      </div>

      <!-- Tahun Mobil -->
      <div>
        <label for="tahun_mobil" class="block text-gray-700 font-semibold mb-2">Tahun Mobil</label>
        <input type="number" id="tahun_mobil" name="tahun_mobil" 
               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500" 
               placeholder="Masukkan tahun mobil" required>
      </div>

      <!-- Kilometer Mobil -->
      <div>
        <label for="km_mobil" class="block text-gray-700 font-semibold mb-2">Kilometer Mobil</label>
        <input type="number" id="km_mobil" name="km_mobil" 
               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500" 
               placeholder="Masukkan kilometer mobil" required>
      </div>

      <!-- Gambar Mobil -->
      <div>
        <label for="gambar_mobil" class="block text-gray-700 font-semibold mb-2">Gambar Mobil</label>
        <input type="file" id="gambar_mobil" name="gambar_mobil" accept=".jpg,.jpeg,.png" 
               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 bg-gray-50" required
               onchange="previewImage(event)">
        <div class="mt-4">
          <img id="preview" class="hidden w-full max-h-64 object-cover rounded-xl shadow-md">
        </div>
      </div>

      <!-- Button -->
      <div class="text-center">
        <button type="submit" 
                class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
          Simpan Data
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Script preview gambar -->
<script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
      const output = document.getElementById('preview');
      output.src = reader.result;
      output.classList.remove('hidden');
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
@endsection
