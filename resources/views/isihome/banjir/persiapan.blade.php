<x-layout title="Persiapan Menghadapi Banjir">
    <!-- pengertian -->

    <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">

                        <img src="{{ asset('gambar/banjir/b5.jpeg') }}" alt="" class="w-full" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            HAL YANG PERLU DISIAPKAN UNTUK MENGHADAPI BENCANA BANJIR
                        </h1>
                        <a href="{{ url('banjir') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Banjir</p>
                        </a>
                    </div>
                    <x-isihome.banjir.kotak />

                    <h2 class="mt-5 mb-4 font-bold text-lg">
                        Hal Yang Perlu Disiapkan Untuk Menghadapi Bencana Banjir
                    </h2>

                    <p class="leading-relaxed mb-">
                        Kerugian akibat bencana banjir dapat di minimalisir apabila kita
                        waspada dan mengantisipasi akan terjadinya bencana banjir. Hal
                        yang dilakukan untuk mengantisipasi terjadinya banjir, yaitu (Reza
                        Al Paringgii, 2024) :
                    </p>

                    <ul class="mb-5 leading-relaxed">
                        <li>
                            1. Letakkan surat dan dokumen penting pada lemari bagian atas.
                            Surat dan dokumen penting yang diletakkan di lemari bagian atas
                            kemungkinan kecil akan terendam air ketika banjir.
                        </li>
                        <li>
                            2. Tanggap akan informasi lingkungan sekitar. Pastikan selalu
                            update dengan kondisi lingkungan sekitar. Biasanya aparatur
                            lingkungan yang bekerjasama dengan warga dan lembaga sosial akan
                            tanggap dengan bencana yang akan terjadi.
                        </li>
                    </ul>



                    

                    
            <x-isihome.banjir.bagianbawah />
            </div>
            </div>
            
        </div>
    </section>
</x-layout>
