
<div class="">
    <h2 class="font-bold text-lg mb-4">
        Sepertinya kamu suka baca ini. Ayo lanjut baca!
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto">
      <!-- portofolio 1 -->
      <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
        <a href="{{ url('jenis-jenis-banjir') }}">
          <img
            src="{{ asset('gambar/banjir/b2.jpeg') }}"
            alt=""
            class="w-full h-[12.5rem]"
          />
          <div class="py-3 px-4">
            <h4
              class="text-left font-bold text-gray-600 group-hover:text-teal-700"
            >
              JENIS - JENIS BANJIR
            </h4>
          </div>
        </a>
      </div>
      <!-- portofolio 2 -->
      <div
        class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300"
      >
        <a href="{{ url('penyebab-banjir') }}">
          <img
            src="{{ asset('gambar/banjir/b4.jpeg') }}"
            alt=""
            class="w-full h-[12.5rem]"
          />
          <div class="py-3 px-4">
            <h4
              class="text-left font-bold text-gray-600 group-hover:text-teal-700"
            >
              PENYEBAB BANJIR
            </h4>
          </div>
        </a>
      </div>
      
    </div>
  </div>










  
  
  @php
    $currentPage = request()->path();
    $pages = [
        'banjir' => ['previous' => null, 'next' => 'jenis-jenis-banjir'],
        'jenis-jenis-banjir' => ['previous' => 'banjir', 'next' => 'penyebab-banjir'],
        'penyebab-banjir' => ['previous' => 'jenis-jenis-banjir', 'next' => 'dampak-banjir'],
        'dampak-banjir' => ['previous' => 'penyebab-banjir', 'next' => 'mitigasi-banjir'],
        'mitigasi-banjir' => ['previous' => 'dampak-banjir', 'next' => 'persiapan-menghadapi-banjir'],
        'persiapan-menghadapi-banjir' => ['previous' => 'mitigasi-banjir', 'next' => 'tindakan-saat-terjadi-banjir'],
        'tindakan-saat-terjadi-banjir' => ['previous' => 'persiapan-menghadapi-banjir', 'next' => 'daftar-pustaka-banjir']
    ];

    $previousPage = $pages[$currentPage]['previous'] ?? null;
    $nextPage = $pages[$currentPage]['next'] ?? null;
@endphp

<!-- Paginasi -->
<div class="mt-8">
    <div class="flex justify-between items-center">
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
</div>


  <!-- mungkin membantu -->
  <style>
  .grid .bg-gray-50 img {
  object-fit: cover;
  }
  </style>