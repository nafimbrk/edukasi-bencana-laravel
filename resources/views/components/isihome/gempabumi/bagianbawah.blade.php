@php
    $currentPage = request()->path();
    $pages = [
        'gempabumi' => ['previous' => null, 'next' => 'penyebab-gempabumi'],
        'penyebab-gempabumi' => ['previous' => 'gempabumi', 'next' => 'dampak-gempabumi'],
        'dampak-gempabumi' => ['previous' => 'penyebab-gempabumi', 'next' => 'karakteristik-gempabumi'],
        'karakteristik-gempabumi' => ['previous' => 'dampak-gempabumi', 'next' => 'klasifikasi-gempabumi'],
        'klasifikasi-gempabumi' => ['previous' => 'karakteristik-gempabumi', 'next' => 'mitigasi-gempabumi'],
        'mitigasi-gempabumi' => ['previous' => 'klasifikasi-gempabumi', 'next' => 'tindakan-pencegahan-gempabumi'],
        'tindakan-pencegahan-gempabumi' => ['previous' => 'mitigasi-gempabumi', 'next' => 'daftar-pustaka-gempabumi']
    ];

    $previousPage = $pages[$currentPage]['previous'] ?? null;
    $nextPage = $pages[$currentPage]['next'] ?? null;
@endphp









<!-- Bagian Portofolio -->
<!--<div class="md:px-20">-->
<!--    <h2 class="font-bold text-lg mb-4">-->
<!--        Sepertinya kamu suka baca ini. Ayo lanjut baca!-->
<!--    </h2>-->
<!--    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto">-->
<!--        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">-->
<!--            <a href="{{ url('penyebab-gempabumi') }}">-->
<!--                <img src="{{ asset('gambar/gempabumi.png') }}" alt="" class="w-full h-[12.5rem]" />-->
<!--                <div class="py-3 px-4">-->
<!--                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">-->
<!--                        PENYEBAB GEMPABUMI-->
<!--                    </h4>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">-->
<!--            <a href="{{ url('karakteristik-gempabumi') }}">-->
<!--                <img src="{{ asset('gambar/gempabumi.png') }}" alt="" class="w-full h-[12.5rem]" />-->
<!--                <div class="py-3 px-4">-->
<!--                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">-->
<!--                        KARAKTERISTIK GEMPABUMI-->
<!--                    </h4>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!--</div>-->
<!--</div>-->




<!--paginasi-->
<!--<div class="mt-8 mb-10 flex justify-between items-center">-->
<!--    <div class="flex-shrink-0">-->
<!--          @if ($previousPage)-->
<!--          <a href="{{ url($previousPage) }}" class="flex items-center space-x-2 text-black">-->
<!--              <i class="fa-solid fa-arrow-left"></i>-->
<!--              <span class="text-base font-normal">Previous Post</span>-->
<!--          </a>-->
<!--      @else-->
<!--          <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">-->
<!--              <i class="fa-solid fa-arrow-left"></i>-->
<!--              <span class="text-base font-normal">Previous Post</span>-->
<!--          </span>-->
<!--      @endif-->
<!--    </div>-->
  
<!--    <div class="flex-shrink-0">-->
<!--      @if ($nextPage)-->
<!--          <a href="{{ url($nextPage) }}" class="flex items-center space-x-2 text-black">-->
<!--              <span class="text-base font-normal">Next Post</span>-->
<!--              <i class="fa-solid fa-arrow-right"></i>-->
<!--          </a>-->
<!--      @else-->
<!--          <span class="flex items-center space-x-2 text-gray-400 cursor-not-allowed">-->
<!--              <span class="text-base font-normal">Next Post</span>-->
<!--              <i class="fa-solid fa-arrow-right"></i>-->
<!--          </span>-->
<!--      @endif-->
<!--  </div>-->
<!--  </div>-->









<!--</section>-->

 <!--mungkin membantu -->
<!--<style>-->
<!--.grid .bg-gray-50 img {-->
<!--object-fit: cover;-->
<!--}-->
<!--</style>-->
















<!-- Bagian Portofolio -->
<div class="">
    <h2 class="font-bold text-lg mb-4">
        Sepertinya kamu suka baca ini. Ayo lanjut baca!
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mx-auto">
        <!-- portofolio 1 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('penyebab-gempabumi') }}">
                <img src="{{ asset('gambar/gempabumi/g6.jpeg') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
                        PENYEBAB GEMPABUMI
                    </h4>
                </div>
            </a>
        </div>
        <!-- portofolio 2 -->
        <div class="group border-b bg-gray-50 hover:scale-105 hover:shadow-lg transform transition duration-300">
            <a href="{{ url('karakteristik-gempabumi') }}">
                <img src="{{ asset('gambar/gempabumi/g2.jpeg') }}" alt="" class="w-full h-[12.5rem]" />
                <div class="py-3 px-4">
                    <h4 class="text-left font-bold text-gray-600 group-hover:text-teal-700">
                        KARAKTERISTIK GEMPABUMI
                    </h4>
                </div>
            </a>
        </div>
    </div>
</div>



<!--</div>-->
<!--</div>-->

<!-- Paginasi (di luar div konten utama) -->
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


  <!--</section>-->
  
  
  <!--mungkin membantu -->
<style>
.grid .bg-gray-50 img {
object-fit: cover;
}
</style>

