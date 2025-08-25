@extends('layouts.main')

@section('title', 'Detail Event - Only Cars')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <!-- Judul -->
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        🎉 Detail Event
    </h1>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <!-- Gambar Event -->
        <img src="{{ asset('storage/' . $event->gambar_event) }}" 
             alt="{{ $event['judul'] }}" 
             class="w-full h-64 object-cover">

        <!-- Detail -->
        <div class="p-6 space-y-4">
            <h2 class="text-xl font-semibold text-gray-900">
                {{ $event['judul'] }}
            </h2>

            <p class="text-gray-600">
                📝 <span class="font-medium">Deskripsi:</span> {{ $event['deskripsi'] }}
            </p>
            <p class="text-gray-600">
                📍 <span class="font-medium">Lokasi:</span> {{ $event['location'] }}
            </p>
            <p class="text-gray-600">
                📅 <span class="font-medium">Tanggal:</span> {{ \Carbon\Carbon::parse($event['date'])->format('d M Y') }}
            </p>

            <!-- Tombol WhatsApp -->
            <a href="https://wa.me/6281234567890"
               target="_blank"
               class="block bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium">
                💬 Hubungi via WhatsApp
            </a>

            <!-- Tombol Aksi -->
            <div class="flex gap-3">
                <a href="{{ route('event.edit', $event->id) }}" 
                   class="flex-1 text-center bg-indigo-500 hover:bg-indigo-600 text-white py-2 rounded-lg">
                    ✏️ Edit
                </a>
                <form action="{{ route('event.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Yakin hapus event ini?')" class="flex-1">
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
</div>
@endsection
