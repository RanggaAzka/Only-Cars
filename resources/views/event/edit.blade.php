@extends('layouts.main')

@section('content')
<div class="bg-white rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form Event</h2>
    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5 justify-center">
      @csrf
      @method('PUT')
      <div>
        <label for="judul" class="block text-gray-700 font-medium mb-1 max-w-xl">Judul Event</label>
        <input type="text" id="judul" value="{{ $event->judul }}" name="judul" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukkan Judul Event" required />
      </div>
      <div>
        <label for="deskripsi" class="block text-gray-700 font-medium mb-1">Deskripsi Event</label>
        <textarea id="deskripsi" name="deskripsi" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukkan Deskripsi Event" required>{{ $event->deskripsi }}</textarea>
      </div>
      <div>
        <label for="location" class="block text-gray-700 font-medium mb-1">Lokasi Event</label>
        <input type="text" id="location" value="{{ $event->location }}" name="location" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Masukkan Lokasi Event" required />
      </div>
      <div>
        <label for="date" class="block text-gray-700 font-medium mb-1">Tanggal Event</label>
        <input type="date" id="date" value="{{ $event->date }}" name="date" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" required />
      </div>
      <div>
        <label for="gambar_event" class="block text-gray-700 font-medium mb-1">Gambar Event</label>
        <input type="file" name="gambar_event" id="gambar_event" accept=".jpg, .jpeg, .png" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400" />
        <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
      </div>
        <button type="submit" class="w-50 bg-indigo-500 text-white py-2 rounded-xl hover:bg-indigo-600 transition duration-200">
          Simpan Perubahan
        </button>
    </form>
</div>
@endsection
