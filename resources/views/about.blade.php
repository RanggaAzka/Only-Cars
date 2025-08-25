@extends('layouts.main')

@section('title', 'Only Cars - About')

@section('content')

<!-- Header -->
<section class="bg-grey-900 text-white py-16">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h1 class="text-4xl font-bold mb-4 text-black mt-20">Tentang Kami</h1>
    <p class="text-lg text-red-600 max-w-2xl mx-auto">
     {{$tentang['judul']}}
    </p>
  </div>
</section>

<!-- About Content -->
<section class="py-16">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    
    <!-- Text -->
    <div>
      <h2 class="text-3xl font-bold mb-4 text-red-700">Siapa Kami?</h2>
      <p class="mb-4">
        {{$tentang['kami']}}
      </p>
      <p class="mb-4">
        {{$tentang['visi']}}
      </p>
      <a href="#"
         class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-500 transition">
         {{$tentang['hubungi']}}
      </a>
    </div>

    <!-- Image -->
    <div>
      <img src="assets/carlo-d-agnolo-aFxSh_l4fbY-unsplash.jpg" 
           alt="Showroom" class="rounded-2xl shadow-lg">
    </div>
  </div>
</section>
@endsection