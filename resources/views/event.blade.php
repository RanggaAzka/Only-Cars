@extends('layouts.main')

@section('title', 'Only Cars - Event')

@section('content')
 
<!-- Hero Section -->
<section class="relative bg-gray-900 text-white h-[100vh] flex items-center justify-center">
    <img src="assets/alex-suprun-A53o1drQS2k-unsplash.jpg" 
         class="absolute inset-0 w-full h-full object-cover opacity-70">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80"></div>
    <div class="relative text-center px-6 max-w-3xl animate-fadeIn">
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight drop-shadow-xl">
        🚗 Grand Launching Mobil 2025
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-200">
        Jangan lewatkan test drive & promo spesial showroom mobil terbaru
      </p>
      <a href="#daftar" 
         class="mt-6 inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-10 py-3 rounded-full text-lg font-semibold shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
        Daftar Sekarang
      </a>
    </div>
</section>

<!-- Event Section -->
<section class="bg-gray-50 py-20" id="event">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Header -->
      <div class="text-center mb-14">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900">🎉 Event & Promo Spesial</h2>
        <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">
          Temukan event eksklusif showroom kami, mulai dari test drive hingga promo pembelian mobil impian Anda 🚘
        </p>
      </div>

      <!-- Header Action -->
      <div class="flex flex-col sm:flex-row justify-between items-center mb-10">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Koleksi Event</h1>
        <a href="{{ route('event.create') }}" 
           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-xl shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out mt-6 sm:mt-0">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5 mr-2" fill="none" 
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 4v16m8-8H4" />
            </svg>
            Tambah Event
        </a>
      </div>

      <!-- Event Cards -->
      <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
        @forelse($event as $e)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden group transform hover:-translate-y-2 hover:shadow-2xl transition duration-300">
          <a href="{{ route('event.show', $e->id) }}">
            <!-- Gambar -->
            <div class="relative">
              <img src="{{ asset('storage/'.$e->gambar_event) }}" 
                   alt="Event Image" 
                   class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">

              <!-- Overlay gradient -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

              <!-- Badge tanggal -->
              <div class="absolute top-3 left-3 bg-white text-red-600 text-xs font-bold px-3 py-1 rounded-full shadow-md">
                📅 {{ \Carbon\Carbon::parse($e->date)->format('d M Y') }}
              </div>
            </div>

            <!-- Konten -->
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 group-hover:text-red-600 transition">
                {{ $e->judul }}
              </h3>
              <p class="text-gray-600 mt-2 text-sm line-clamp-3">
                {{ $e->deskripsi }}
              </p>
              
              <!-- Lokasi -->
              <div class="flex items-center mt-5 text-gray-500 text-sm">
                <div class="flex items-center justify-center w-7 h-7 rounded-full bg-red-100 mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                {{ $e->location }}
              </div>
            </div>
          </a>
        </div>
        @empty
        <p class="text-gray-500 text-center col-span-3">Belum ada event tersedia.</p>
        @endforelse
      </div>
    </div>
</section>
@endsection
