@extends('layouts.main')

@section('title', 'Tambah Event')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-12">
    <h2 class="text-2xl font-bold mb-6">Tambah Event Baru</h2>

    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        <div>
            <label class="block font-medium">Judul</label>
            <input type="text" name="judul" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div>
            <label class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" class="w-full px-4 py-2 border rounded-lg" required></textarea>
        </div>

        <div>
            <label class="block font-medium">Tanggal</label>
            <input type="date" name="date" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div>
            <label class="block font-medium">Lokasi</label>
            <input type="text" name="location" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div>
            <label class="block font-medium">Gambar</label>
            <input type="file" name="gambar_event" accept="image/*" class="w-full px-4 py-2 border rounded-lg">
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Simpan</button>
    </form>
</div>
@endsection
