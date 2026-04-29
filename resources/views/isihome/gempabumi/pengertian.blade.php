{{-- <x-layout title="Pengertian Gempabumi">
    <!-- pengertian -->
    <section class="w-full py-10 bg-gray-100">
        <div class="container mx-auto w-full lg:w-11/12 flex flex-col lg:flex-row lg:space-x-8">
            <!-- Konten Utama -->
            <div class="bg-white w-full px-4 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <!-- Portofolio 1 -->
                <div class="bg-white">
                    <div class="mx-auto">
                        <img src="{{ asset('gambar/gempabumi/g5.jpeg') }}" alt="" class="w-full h-auto" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            APA ITU GEMPA BUMI
                        </h1>
                        <a href="">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Gempabumi</p>
                        </a>
                    </div>

                    <x-isihome.gempabumi.kotak />

                    <h2 class="mt-5 mb-4 font-bold text-lg">
                        Apa Itu Gempa Bumi
                    </h2>

                    <p class="mb-4 leading-relaxed">
                        Gempa bumi adalah peristiwa bergetarnya bumi akibat pelepasan
                        energi dari dalam perut bumi secara tiba-tiba, sehingga
                        menciptakan gelombang seismik, yang ditandai dengan patahnya
                        lapisan batuan pada kerak bumi (Anies, 2018).
                    </p>
                    <p class="mb-5 leading-relaxed">
                        Gempa bumi adalah hasil dari pergerakan tiba-tiba pada patahan di
                        dalam Bumi. Pergerakan ini melepaskan energi „tegangan elastis‟
                        yang tersimpan dalam bentuk gelombang seismik, yang merambat
                        melalui Bumi dan menyebabkan permukaan tanah bergetar. Pergerakan
                        pada patahan umumnya merupakan respons terhadap deformasi jangka
                        panjang dan akumulasi tekanan.
                    </p>
                    
                    <x-isihome.gempabumi.bagianbawah />
                </div>
            </div>
            
        </div>
    </section>
</x-layout> --}}



<x-layout title="Pengertian Gempabumi">
    <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
                        <img src="{{ asset('gambar/gempabumi.png') }}" alt="" class="w-full h-auto mb-6" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            APA ITU GEMPA BUMI
                        </h1>
                        <a href="{{ url('gempabumi') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Gempabumi</p>
                        </a>
                    </div>

                    <x-isihome.gempabumi.kotak />

                    <h2 class="mt-5 mb-4 font-bold text-lg">
                        Apa Itu Gempa Bumi
                    </h2>

                    <p class="mb-4 leading-relaxed">
                        Gempa bumi adalah peristiwa bergetarnya bumi akibat pelepasan
                        energi dari dalam perut bumi secara tiba-tiba, sehingga
                        menciptakan gelombang seismik, yang ditandai dengan patahnya
                        lapisan batuan pada kerak bumi (Anies, 2018).
                    </p>
                    <p class="mb-5 leading-relaxed">
                        Gempa bumi adalah hasil dari pergerakan tiba-tiba pada patahan di
                        dalam Bumi. Pergerakan ini melepaskan energi „tegangan elastis‟
                        yang tersimpan dalam bentuk gelombang seismik, yang merambat
                        melalui Bumi dan menyebabkan permukaan tanah bergetar. Pergerakan
                        pada patahan umumnya merupakan respons terhadap deformasi jangka
                        panjang dan akumulasi tekanan.
                    </p>
                    
                    <x-isihome.gempabumi.bagianbawah />
                </div>
            </div>
            
        </div>
    </section>
</x-layout>
