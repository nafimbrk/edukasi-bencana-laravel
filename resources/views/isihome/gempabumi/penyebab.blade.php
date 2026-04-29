





<x-layout title="Penyebab Gempabumi">

    <!-- pengertian -->

     <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
                        <img src="{{ asset('gambar/gempabumi/g6.jpeg') }}" alt="" class="w-full" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            PENYEBAB GEMPABUMI
                        </h1>
                        <a href="{{ url('gempabumi') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Gempabumi</p>
                        </a>
                    </div>

                    <x-isihome.gempabumi.kotak />



                    <h2 class="mt-5 mb-4 font-bold text-lg">Penyebab Gempa Bumi</h2>

                    <p class="mb-4 leading-relaxed">
                        Terjadinya gempa Bumi disebabkan oleh pergerakan lempeng Bumi yang
                        memberikan efek getaran pada permukaan Bumi. Ketika terdapat gaya
                        yang cukup besar yang berasal dari pergerakan lempeng, maka batuan
                        di lempeng akan menegang. Akibatnya lempeng Bumi dapat berubah
                        bentuk. Bahkan lempeng dapat patah atau kembali ke bentuk semula
                        jika gaya tersebut hilang.
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Batuan pada lempeng mengalami perubahan bentuk atau deformasi
                        secara perlahan dalam jangka waktu tertentu. Ketika batuan
                        tersebut mengeras/ menegang maka energi potensialnya terus
                        bertambah. Ketika lempeng bergerak atau patah, maka energi
                        tersebut dilepaskan. Energi tersebut mengakibatkan terjadinya
                        getaran yang merambat melalui material Bumi lainnya. Semakin besar
                        energi yang dilepaskan, maka getarannya akan semakin terasa.
                    </p>
                    <p class="mb-5 leading-relaxed">
                        Selain itu gempa bumi dapat disebabkan karena aktivitas gunung
                        berapi, ledakan nuklir dan pergerakan geomorfologi secara lokal
                        seperti terjadi runtuhan tanah, serta aktivitas manusia.
                    </p>
                      

                    
            <x-isihome.gempabumi.bagianbawah />

</div>
            </div>
            
        </div>
    </section>
</x-layout>
