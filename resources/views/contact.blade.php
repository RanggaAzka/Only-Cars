@extends('layouts.main')

@section('title', 'Only Cars - Contact Us')

@section('content')
<div class="min-h-screen bg-gray-100 py-30 px-6">

    {{-- Header --}}
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">📞 Hubungi Kami</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Kami siap membantu Anda. Silakan kirim pesan melalui form di bawah atau hubungi kontak kami secara langsung.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto">
        
        {{-- Info Kontak --}}
        <div class="bg-white shadow-lg rounded-2xl p-8 space-y-6">
            <div class="flex items-center space-x-4">
                <div class="bg-red-500 p-4 rounded-full text-white">
                    📍
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Alamat</h3>
                    <p class="text-gray-600">Bogor, Indonesia</p>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <div class="bg-red-500 p-4 rounded-full text-white">
                    📧
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                    <p class="text-gray-600">onlycars@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <div class="bg-red-500 p-4 rounded-full text-white">
                    📱
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Telepon</h3>
                    <p class="text-gray-600">+62 812-3456-7890</p>
                </div>
            </div>

            {{-- Google Maps --}}
            <div class="overflow-hidden rounded-lg shadow-md">
                <iframe     
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d150820.3145984593!2d106.72512585948697!3d-6.614810963321588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44a0cd6aab5%3A0x301576d14feb9a0!2sBogor%2C%20Kp.%20Parung%20Jambu%2C%20Bogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1755775752034!5m2!1sen!2sid"
                    width="100%" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>

        {{-- Form Kontak --}}
        <div class="bg-white shadow-lg rounded-2xl p-8">
             <div id="successMessage" class="hidden mb-6 p-4 rounded-lg bg-green-100 text-green-700 font-medium text-center">
      ✅ Kirim Pesan berhasil! Terima kasih sudah menghubungi kami.
    </div>
            <form id="daftarForm" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama Anda"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" name="email" placeholder="Masukkan email Anda"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Pesan</label>
                    <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none" required></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-red-500 to-red-700 text-white py-3 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition duration-300">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</div>

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
