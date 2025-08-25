@extends('layouts.main')

@section('title', 'Only Cars - Home')

@section('content')
  {{-- Hero Section --}}
  <section class="relative bg-gray-900 text-white py-25">
    <img src="assets/stacey-lee-G4-0ZdlpDX4-unsplash.jpg" alt="Showroom" class="w-full h-[700px] object-cover opacity-70">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">{{$tentang['rider']}}</h1>
      <p class="text-lg md:text-xl mb-6">{{$tentang['home']}}</p>
      <a href="mobil" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold shadow-lg">Lihat Koleksi</a>
    </div>
  </section>

  <section class="py-16 bg-white text-center" x-data="countdown('2025-09-25T09:00:00')">
    <h2 class="text-3xl font-bold text-gray-800">Hitung Mundur Event Mobil</h2>
    <div class="flex justify-center gap-6 mt-6">
      <div class="bg-gray-100 px-6 py-4 rounded-lg shadow">
        <span class="text-3xl font-bold text-red-600" x-text="days"></span>
        <p class="text-gray-600">Hari</p>
      </div>
      <div class="bg-gray-100 px-6 py-4 rounded-lg shadow">
        <span class="text-3xl font-bold text-red-600" x-text="hours"></span>
        <p class="text-gray-600">Jam</p>
      </div>
      <div class="bg-gray-100 px-6 py-4 rounded-lg shadow">
        <span class="text-3xl font-bold text-red-600" x-text="minutes"></span>
        <p class="text-gray-600">Menit</p>
      </div>
      <div class="bg-gray-100 px-6 py-4 rounded-lg shadow">
        <span class="text-3xl font-bold text-red-600" x-text="seconds"></span>
        <p class="text-gray-600">Detik</p>
      </div>
    </div>
  </section>

  <!-- Detail Event -->
  <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12">
    <div>
      <img src="assets/stacey-lee-Gw-SbOJKzkE-unsplash.jpg" alt="Test Drive Mobil" class="rounded-2xl shadow-lg">
    </div>
    <div class="flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Event Mobil</h2>
      <p class="text-gray-600 leading-relaxed mb-4">
        Acara <span class="font-semibold">Grand Launching Mobil 2025</span> menghadirkan pengalaman test drive eksklusif, promo potongan harga spesial, serta hadiah menarik untuk pengunjung showroom.
      </p>
      <ul class="space-y-2 text-gray-700">
        <li>✅ Test Drive Mobil Terbaru</li>
        <li>✅ Diskon hingga 25% pembelian mobil</li>
        <li>✅ Hadiah langsung untuk 100 pendaftar pertama</li>
        <li>✅ Voucher bensin gratis</li>
      </ul>
    </div>
  </section>

  <!-- Promo Section -->
  <section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-gray-800">🎉 Promo Spesial Event Mobil</h2>
      <p class="text-gray-600 mt-3">Nikmati promo khusus selama event berlangsung</p>

      <div class="grid md:grid-cols-3 gap-8 mt-10">
        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold text-gray-800">💰 Diskon DP 0%</h3>
          <p class="mt-2 text-gray-600">Dapatkan mobil impian dengan DP ringan tanpa bunga.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold text-gray-800">🎁 Hadiah Langsung</h3>
          <p class="mt-2 text-gray-600">Setiap pembelian mobil dapatkan hadiah menarik.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold text-gray-800">⛽ Voucher BBM</h3>
          <p class="mt-2 text-gray-600">Gratis voucher BBM untuk 50 pembeli pertama.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration Form -->
  <section id="daftar" class="bg-gray-900 text-white py-16">
  <div class="max-w-3xl mx-auto text-center mb-10">
    <h2 class="text-3xl font-bold">Daftar Event Mobil</h2>
    <p class="mt-3 text-gray-300">Isi form untuk ikut serta dalam acara launching</p>
  </div>

  <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8 text-gray-900">
    <!-- Alert sukses (default: hidden) -->
    <div id="successMessage" class="hidden mb-6 p-4 rounded-lg bg-green-100 text-green-700 font-medium text-center">
      ✅ Pendaftaran berhasil! Terima kasih sudah mendaftar.
    </div>

    <form id="daftarForm" class="space-y-4">
      <div>
        <label class="block text-gray-700 mb-2">Nama Lengkap</label>
        <input type="text" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-500" placeholder="Masukkan nama anda" required>
      </div>
      <div>
        <label class="block text-gray-700 mb-2">Email</label>
        <input type="email" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-500" placeholder="Masukkan email anda" required>
      </div>
      <div>
        <label class="block text-gray-700 mb-2">No. HP</label>
        <input type="text" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-500" placeholder="Masukkan nomor HP anda" required>
      </div>
      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-semibold text-lg">
        Kirim Pendaftaran
      </button>
    </form>
  </div>
</section>

 <script>
    function countdown(targetDate) {
      return {
        days: 0, hours: 0, minutes: 0, seconds: 0,
        init() {
          setInterval(() => {
            const diff = new Date(targetDate) - new Date();
            this.days = Math.floor(diff / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            this.minutes = Math.floor((diff / (1000 * 60)) % 60);
            this.seconds = Math.floor((diff / 1000) % 60);
          }, 1000);
        }
      }
    }
  </script>

  <script>
  const form = document.getElementById('daftarForm');
  const successMessage = document.getElementById('successMessage');

  form.addEventListener('submit', function (e) {
    e.preventDefault(); // Supaya tidak reload halaman

    // Tampilkan alert sukses
    successMessage.classList.remove('hidden');

    // Reset form
    form.reset();

    // Sembunyikan lagi setelah 5 detik (opsional)
    setTimeout(() => {
      successMessage.classList.add('hidden');
    }, 5000);
  });
</script>

 
@endsection
