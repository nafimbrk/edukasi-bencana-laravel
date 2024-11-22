<x-layout title="Karakteristik Gempabumi">


    <!-- pengertian -->

<section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
              <img src="{{ asset('gambar/gempabumi/g2.jpeg') }}" alt="" class="w-full" />
              <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                KARAKTERISTIK GEMPABUMI
              </h1>
              <a href="{{ url('gempabumi') }}"
                ><p class="mt-3 mb-7 hover:text-teal-700">/ Gempabumi</p></a
              >
            </div>
            <x-isihome.gempabumi.kotak/>

            

            <h2 class="mt-5 mb-4 font-bold text-lg">
              Karakteristik Gempa Bumi
            </h2>
            <p class="leading-relaxed">
              Terdapat beberapa karakteristik gempa bumi, yaitu : 
            </p>
            <ol class="mb-5 leading-relaxed">
              <li>1. Berlangsung dalam waktu yang sangat singkat</li>
              <li>2. Lokasi kejadian tertentu</li>
              <li>3. Akibatnya dapat menimbulkan bencana</li>
              <li>4. Berpotensi terulang lagi</li>
              <li>5. Belum dapat diprediksi</li>
              <li>6. Tidak dapat dicegah, tetapi akibat yang ditimbulkan dapat dikurangi</li>
            </ol>
              

            

      <x-isihome.gempabumi.bagianbawah />
      </div>
            </div>
            
        </div>
    </section>

</x-layout>
