<x-layout title="Klasifikasi Gempabumi">

    <!-- pengertian -->

    <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
              <img src="{{ asset('gambar/gempabumi/g3.jpeg') }}" alt="" class="w-full" />
              <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                KLASIFIKASI GEMPABUMI
              </h1>
              <a href="{{ url('gempabumi') }}"
                ><p class="mt-3 mb-7 hover:text-teal-700">/ Gempabumi</p></a
              >
            </div>
            <x-isihome.gempabumi.kotak/>

            <h2 class="mt-5 mb-4 font-bold text-lg">Klasifikasi Gempa Bumi</h2>

            <p class="leading-relaxed mb-4">
              Jenis-jenis gempa bumi dibedakan menjadi tiga, yaitu :
            </p>
            <p class="mb-4 font-bold leading-relaxed">1) Berdasarkan Penyebabnya</p>
            <dl class="mb-4">
              <dt class="font-bold leading-relaxed">• Gempa Tektonik</dt>
              <img
                src="{{ asset('gambar/gempabumi2.png') }}"
                alt=""
                class="w-full h-80"
              />
              <dd class="mb-4 leading-relaxed">
                Gempa Bumi ini disebabkan oleh adanya aktivitas tektonik, yaitu
                pergeseran lempeng-lempeng tektonik secara mendadak yang
                mempunyai kekuatan dari yang sangat kecil hingga yang sangat
                besar. Gempa bumi ini banyak menimbulkan kerusakan atau bencana
                alam di Bumi, getaran gempa Bumi yang kuat mampu menjalar
                keseluruh bagian Bumi. Gempa bumi tektonik disebabkan oleh
                pelepasan tenaga yang terjadi karena pergeseran lempengan plat
                tektonik seperti layaknya gelang karet ditarik dan dilepaskan
                dengan tiba-tiba.
              </dd>
              <dt class="font-bold leading-relaxed">• Gempa Vulkanik</dt>
              <img
                src="{{ asset('gambar/gempabumi3.png') }}"
                alt=""
                class="w-full h-80"
              />
              <dd class="mb-4 leading-relaxed">
                Gempa Bumi ini terjadi akibat adanya aktivitas magma, yang biasa
                terjadi sebelum gunung api meletus. Apabila keaktifannya semakin
                tinggi maka akan menyebabkan timbulnya ledakan yang juga akan
                menimbulkan terjadinya gempa bumi. Gempa bumi tersebut hanya
                terasa di sekitar gunung api tersebut.
              </dd>
              <dt class="font-bold ">• Gempa Runtuhan/Terban</dt>
              <dd class="mb-4 leading-relaxed">
                Gempa bumi runtuhan terjadi karena guguran atau runtuhan tanah
                atau runtuhnya bagian atas litosfer karena sebelah dalam
                berongga. Daerah yang terjadi gempa guguran adalah daerah
                tambang yang berbentuk terowongan, pegunungan kapur atau lubang
                di dalam pegunungan kapur. Kadang-kadang terdapat gua yang
                terjadi karena pelarutan. Jika atap gua tersebut runtuh, maka
                timbulah gempa bumi. Bahaya yang di akibatkan gempa bumi
                runtuhan kecil, umumnya gempa runtuhan terjadi pada wilayah
                lokal.
              </dd>
              <dt class="font-bold ">• Gempa Buatan</dt>
              <dd class="mb-4 leading-relaxed">
                Gempa bumi buatan adalah gempa bumi yang disebabkan oleh
                aktivitas dari manusia, seperti peledakan dinamit, nuklir atau
                palu yang dipukulkan ke permukaan bumi.
              </dd>
            </dl>
            <p class="mb-4 font-bold">2) Berdasarkan Kedalaman</p>
            <dt class="font-bold">• Gempa bumi dalam ( > 300 km)</dt>
            <dd class="mb-4 leading-relaxed">
              Gempa bumi dalam adalah gempa bumi yang hiposentrumnya berada
              lebih dari 300 km di bawah permukaan bumi (di dalam kerak bumi).
              Gempa bumi dalam pada umumnya tidak terlalu berbahaya.
            </dd>
            <dt class="font-bold ">• Gempa bumi menengah ( 60-300 km)</dt>
            <dd class="mb-4 leading-relaxed">
              Gempa bumi menengah adalah gempa bumi yang hiposentrumnya berada
              antara 60 km sampai 300 km di bawah permukaan bumi.gempa bumi
              menengah pada umumnya menimbulkan kerusakan ringan dan getarannya
              lebih terasa.
            </dd>
            <dt class="font-bold ">• Gempa bumi dangkal ( < 300 km )</dt>
            <dd class="mb-4 leading-relaxed">
              Gempa bumi dangkal adalah gempa bumi yang hiposentrumnya berada
              kurang dari 60 km dari permukaan bumi. Gempa bumi ini biasanya
              menimbulkan kerusakan yang besar.
            </dd>
            <p class="mb-4 font-bold">3) Berdasarkan gelombang</p>
            <dt class="font-bold ">• Gelombang primer</dt>
            <dd class="mb-4 leading-relaxed">
              Gelombang primer (gelombang lungituudinal) adalah gelombang atau
              getaran yang merambat di tubuh bumi dengan kecepatan antara 7-14
              km/detik. Getaran ini berasal dari hiposentrum.
            </dd>
            <dt class="font-bold">• Gelombang sekunder</dt>
            <dd class="mb-5 leading-relaxed">
              Gelombang sekunder (gelombang transversal) adalah gelombang atau
              getaran yang merambat, seperti gelombang primer dengan kecepatan
              yang sudah berkurang, yakni 4-7 km/detik. Gelombang sekunder tidak
              dapat merambat melalui lapisan cair.
            </dd>
            

            

      <x-isihome.gempabumi.bagianbawah />
      </div>
            </div>
            
        </div>
    </section>

    </x-layout>