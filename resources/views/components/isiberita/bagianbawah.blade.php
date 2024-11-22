 <!-- Logika untuk menentukan halaman sebelumnya dan berikutnya -->
{{-- @php
    $currentPage = request()->path(); // Mendapatkan URL saat ini
    $pages = [
        'berita-1' => ['previous' => null, 'next' => 'berita-2'],
        'berita-2' => ['previous' => 'berita-1', 'next' => 'berita-3'],
        'berita-3' => ['previous' => 'berita-2', 'next' => 'berita-4'],
        'berita-4' => ['previous' => 'berita-3', 'next' => null],
    ];

    $previousPage = $pages[$currentPage]['previous'] ?? null;
    $nextPage = $pages[$currentPage]['next'] ?? null;
@endphp




<div class="container">
    
</div>
<!-- Sepertinya Kamu Suka Baca -->
<div class="bg-white px-8 py-8 mb-12"> <!-- Tambahkan margin-bottom untuk jarak yang lebih besar -->
    <h2 class="font-bold text-lg mb-6"> <!-- Tambahkan margin-bottom pada judul -->
        Sepertinya kamu suka baca ini. Ayo lanjut baca!
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Portofolio 1 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('berita-2') }}">
                <img src="{{ asset('gambar/berita/berita2.png') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
                        Penyerahan Alat-alat Siaga Bencana ke Pondok Pesantren Al Muhibbin Jombang
                    </h4>
                </div>
            </a>
        </div>

        <!-- Portofolio 2 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('berita-3') }}">
                <img src="{{ asset('gambar/berita/berita3.png') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
                        Simulasi Kebencanaan Bagi Santri Dan Santriwati Di Pondok Pesantren Jombang
                    </h4>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Recent Post -->
<div class="bg-white px-8 py-8 mb-12"> <!-- Tambahkan margin-bottom untuk jarak yang lebih besar -->
    <h3 class="text-xl font-bold mb-6">Recent Post</h3> <!-- Tambahkan margin-bottom pada judul -->
    <a href="{{ url('berita-2') }}">
        <p class="mb-4 leading-relaxed">
            Penyerahan Alat-alat Siaga Bencana ke Pondok Pesantren Al Muhibbin Jombang
        </p>
    </a>
    <a href="{{ url('berita-3') }}">
        <p class="leading-relaxed">
            Simulasi Kebencanaan Bagi Santri Dan Santriwati Di Pondok Pesantren Jombang
        </p>
    </a>
</div>



<!-- Paginasi -->
<div class="mt-12 flex justify-between items-center mx-8"> <!-- Tambahkan margin-top untuk jarak yang lebih besar -->
    <!-- Tombol Previous -->
    <div class="flex-shrink-0">
        @if ($previousPage)
            <a href="{{ url($previousPage) }}" class="flex items-center space-x-2 text-black">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="text-base font-normal">Previous Post</span>
            </a>
        @else
            <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="text-base font-normal">Previous Post</span>
            </span>
        @endif
    </div>

    <!-- Tombol Next -->
    <div class="flex-shrink-0">
        @if ($nextPage)
            <a href="{{ url($nextPage) }}" class="flex items-center space-x-2 text-black">
                <span class="text-base font-normal">Next Post</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        @else
            <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">
                <span class="text-base font-normal">Next Post</span>
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        @endif
    </div>
</div> --}}

























<div class="">
    <h2 class="font-bold text-lg mb-4">
        Sepertinya kamu suka baca ini. Ayo lanjut baca!
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto">
        <!-- portofolio 1 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('berita-2') }}">
                <img src="{{ asset('gambar/berita/berita.png') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
Bencana Banjir dan Kebakaran Menjadi Salah Satu Masalah Serius! Begini Sosialisasinya 
</h4>
                </div>
            </a>
        </div>
        <!-- portofolio 2 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('berita-3') }}">
                <img src="{{ asset('gambar/berita/berita3.png') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
                        Simulasi Kebencanaan Bagi Santri Dan Santriwati Di Pondok Pesantren Jombang
                    </h4>
                </div>
            </a>
        </div>
        
      </div>
    </div>
  
  
  
  
  
  <!--</div>-->
  <!--</div>-->
  
  
  
  
  
    
    
 @php
    $currentPage = request()->path(); // Mendapatkan URL saat ini
    $pages = [
        'berita-1' => ['previous' => null, 'next' => 'berita-2'],
        'berita-2' => ['previous' => 'berita-1', 'next' => 'berita-3'],
'berita-3' => ['previous' => 'berita-2', 'next' => 'berita-4'],
        'berita-4' => ['previous' => 'berita-3', 'next' => null]    ];

    $previousPage = $pages[$currentPage]['previous'] ?? null;
    $nextPage = $pages[$currentPage]['next'] ?? null;
@endphp
  



  <!-- Paginasi -->
  <div class="mt-8 flex justify-between items-center">
    <div class="flex-shrink-0">
      @if ($previousPage)
          <a href="{{ url($previousPage) }}" class="flex items-center space-x-2 text-black">
              <i class="fa-solid fa-arrow-left"></i>
              <span class="text-base font-normal">Previous Post</span>
          </a>
      @else
          <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">
              <i class="fa-solid fa-arrow-left"></i>
              <span class="text-base font-normal">Previous Post</span>
          </span>
      @endif
    </div>
  
      <div class="flex-shrink-0">
      @if ($nextPage)
          <a href="{{ url($nextPage) }}" class="flex items-center space-x-2 text-black">
              <span class="text-base font-normal">Next Post</span>
              <i class="fa-solid fa-arrow-right"></i>
          </a>
      @else
          <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">
              <span class="text-base font-normal">Next Post</span>
              <i class="fa-solid fa-arrow-right"></i>
          </span>
      @endif
  </div>
  </div>
  <!--</div>-->
  
    </section>
    
    <!-- mungkin membantu -->
    <style>
    .grid .bg-gray-50 img {
    object-fit: cover;
    }
    </style>