@php

$berita = [
            [
                'title' => 'Penyerahan Alat-alat Siaga Bencana ke Pondok Pesantren',
                'description' => 'Kamis (8/08/2024) Pada pertemuan kelima, Tim Edukasi Bencana kembali mendatangi Pondok Pesantren  didampingi dengan Ibu dosen pendamping mengadakan acara...',
                'image' => 'gambar/berita/berita.png',
                'url' => 'berita-1',
            ],
            [
                'title' => 'Bencana Banjir dan Kebakaran Menjadi Salah Satu Masalah Serius! Begini Sosialisasinya',
                'description' => 'Kamis (13/06/2024) Pada pertemuan kedua, diadakan penyuluhan yang bertajuk “Mitigasi Bencana Banjir dan Kebakaran”. Selain itu, juga diadakan...',
                'image' => 'gambar/berita/berita2.png',
                'url' => 'berita-2',
            ],
            [
                'title' => 'SIMULASI KEBENCANAAN BAGI SANTRI DAN SANTRIWATI DI PONDOK PESANTREN JOMBANG',
                'description' => 'Jum’at (19/07/2024) Tidak hanya melakukan simulasi pada Santri, tim dari STIKES PEMKAB JOMBANG dan BPBD (Badan Penanggulangan Bencana Daerah) Kabupaten Jombang juga melaksanakan...',
                'image' => 'gambar/berita/berita3.png',
                'url' => 'berita-3',
            ],
            [
                'title' => 'SIMULASI BENCANA BERSAMA PIHAK PEMADAM KEBAKARAN DI PONDOK PESANTREN',
                'description' => 'Sebagai langkah untuk mencegah adanya korban saat terjadi bencana maka dilakukan pelatihan mitigasi bencana alam banjir dan kebakaran tepatnya pada hari Jum`at 14/6/2024. Pelatihan ini bertujuan untuk...',
                'image' => 'gambar/berita/berita4.png',
                'url' => 'berita-4',
            ]
        ];

        $perPage = 3;
        $page = request('page', 1);
        $total = count($berita);
        $pages = ceil($total / $perPage);

        $berita = array_slice($berita, ($page - 1) * $perPage, $perPage);
        
@endphp










 







 











<x-layout title="Berita">
    <!-- berita -->
    <section id="portofolio" class="bg-gray-100">
        <div class="container mx-auto md:px-8 md:py-16"> 
            <div class="bg-white px-6 py-8 md:px-16 md:py-20">
                
                <div class="flex justify-center md:justify-start">
                <h1 class="text-4xl md:text-5xl font-bold text-left mb-3 ml-0 text-center md:text-left">Berita</h1>
                                </div>
                <div class="flex justify-center md:justify-start">
                <div class="w-24 h-1 bg-teal-700 mb-14 align-item-center"></div>
                
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($berita as $item)
                        <div class="bg-gray-50">
                            <a href="{{ url($item['url']) }}">
                                <img src="{{ asset($item['image']) }}" alt="" class="w-full h-[170px] object-cover">
                            </a>
                            <div class="py-4 px-4">
                                <a href="{{ url($item['url']) }}">
                                    <h4 class="text-left font-bold text-lg mb-7">{{ $item['title'] }}</h4>
                                </a>
                                <p class="leading-relaxed">{{ $item['description'] }}</p>
                                <a href="{{ url($item['url']) }}" class="inline-block mt-7 text-md font-medium text-black bg-white py-2 px-4 rounded-lg hover:bg-gray-50">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- paginasi -->
                <div class="mt-10 flex justify-center">
                    <nav class="flex items-center space-x-1">
                        @if ($page > 1)
                            <a href="{{ url()->current() }}?page={{ $page - 1 }}" class="px-3 py-2 bg-white border hover:bg-gray-100">Previous</a>
                        @endif
                
                        @for ($i = 1; $i <= $pages; $i++)
                            <a href="{{ url()->current() }}?page={{ $i }}" class="px-3 py-2 bg-white border hover:bg-gray-100 {{ $i == $page ? 'font-bold text-teal-700' : '' }}">{{ $i }}</a>
                        @endfor
                
                        @if ($page < $pages)
                            <a href="{{ url()->current() }}?page={{ $page + 1 }}" class="px-3 py-2 bg-white border hover:bg-gray-100">Next</a>
                        @endif
                    </nav>
                </div>
                
            </div>
        </div>
    </section>

    <!-- mungkin membantu -->
    <style>
        .grid .bg-gray-50 img {
            object-fit: cover;
        }
    </style>
</x-layout>


