


















@php
    $currentPage = request()->path();
     $pages = [
        'daftar-pustaka-kebakaran' => ['previous' => 'tindakan-saat-terjadi-kebakaran', 'next' => 'video-kebakaran'],
                'video-kebakaran' => ['previous' => 'daftar-pustaka-kebakaran', 'next' => null]
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
