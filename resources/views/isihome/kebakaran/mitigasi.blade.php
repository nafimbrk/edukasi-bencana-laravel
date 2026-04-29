<x-layout title="Mitigasi Kebakaran">

    <!-- pengertian -->

   <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
                        <img src="{{ asset('gambar/kebakaran/g.jpeg') }}" alt="" class="w-full" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            MITIGASI BENCANA KEBAKARAN
                        </h1>
                        <a href="{{ url('kebakaran') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Kebakaran</p>
                        </a>
                    </div>
                    <x-isihome.kebakaran.kotak />

                    <h2 class="mt-5 mb-4 font-bold text-lg">Mitigasi Bencana Kebakaran</h2>

                    <p class="leading-relaxed">
                        Mitigasi adalah adalah serangkaian kegiatan yang dilakukan untuk
                        mengantisipasi bencana melalui pengorganisasian serta melalui
                        langkah yang tepat. Mitigasi bencana kebakaran, antara lain :
                    </p>
                    <ol class="mb-5 leading-relaxed">
                        <li>1. Menyiapkan Peralatan Kebakaran (APAR);</li>
                        <li>2. Mempersiapkan mobil pemadam kebakaran;</li>
                        <li>3. Menyiapkan Personil atau Anggota Pemadam Kebakaran;</li>
                        <li>
                            4. Melakukan sosialisasi kepada masyarakat tentang dampak
                            kebakaran.
                        </li>
                    </ol>

                    

                    
            <x-isihome.kebakaran.bagianbawah />
            </div>
            </div>
            
        </div>
    </section>


</x-layout>
