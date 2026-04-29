<x-layout title="Tindakan Pencegahan Kebakaran">
    <!-- pengertian -->

    <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">
                        <img src="{{ asset('gambar/kebakaran/g2.jpeg') }}" alt="" class="w-full" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            TINDAKAN YANG DILAKUKAN KETIKA / PASCA TERJADI KEBAKARAN
                        </h1>
                        <a href="{{ url('kebakaran') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Kebakaran</p>
                        </a>
                    </div>
                    <x-isihome.kebakaran.kotak />


                    <h2 class="mt-5 mb-4 font-bold text-lg">
                        Tindakan Yang Dilakukan Ketika Terjadi Kebakaran
                    </h2>

                    <p class="mb-4 leading-relaxed">
                        Musibah kebakaran dapat terjadi kapan saja dan dimana saja.
                        Hal-hal yang dapat dilakukan ketika terjadi bencana kebakaran
                        terutama dirumah, yaitu (Pemadam Kebakaran Kota Bogor, 2017) :
                    </p>
                    <ol class="mb-4 leading-relaxed">
                        <li>1. Tetap tenang saat menghadapi kebakaran, sikap panik akan memperburuk keadaan karena
                            kita akan cenderung bertindak gegabah.
                        <li>2. Segera beritahukan orang lain yang berada di dekat dengan api, bunyikan tanda alarm
                            atau berteriak. Pastikan semua orang yang berada di dalam rumah mendengar.
                        </li>
                        <li>3. Segera bawa semua orang dengan cara dievakuasi, jangan mendahulukan atau
                            menyelamatkan barang, nyawa adalah prioritas utama.</li>
                        </li>
                        <li class="mb-4">
                            4. Jika kebakaran kecil dan masih bisa diatasi sendiri, segera padamkan dengan alat
                            pemadam kebakaran yang ada seperti APAR (Alat Pemadam Api Ringan), jika tidak ada,
                            bisa digantikan oleh air, pasir atau tanah, atau karung goni yang telah dibasahi.
                        </li>
                        <img src="{{ asset('gambar/kebakaran1.png') }}" alt="" class="w-full h-80 mb-4" />
                        <img src="{{ asset('gambar/kebakaran2.png') }}" alt="" class="w-full h-80 mb-4" />
                        <li>
                            5. Jika kebakaran disebabkan oleh korsleting listrik, segera matikan listrik di rumah.
                        </li>
                        <li>
                            6. Tutup ruangan lokasi kebakaran agar tidak menjalar ke ruang lain tetapi jangan dikunci,
                            untuk memudahkan anggota pemadam kebakaran jika akan memadamkan api.
                        </li>
                        <li>
                            7. Hindari menghirup asap yang tebal, misalnya dengan cara merangkak dan bernafas
                            dengan mendekatkan muka ke lantai, gunakan kain basah sebagai penutup hidung, hal ini
                            akan membantu untuk bernafas.

                        </li>
                        <li>
                            8. Jika melalui pintu yang tertutup, periksalah suhu daun pintu dengan menempelkan
                            belakang telapak tangan Anda. Kemudian periksa gagang pintu. Jika terasa panas pindah
                            melalui jalur lain.

                        </li>
                        <li>
                            9. Segera hubungi Markas Komando Pemadam Kebakaran terdekat jika api tidak dapat
                            dikendalikan sendiri.

                        </li>
                        <li>
                            10. Jangan kembali ke rumah sebelum ada tanda aman dari pihak pemadam kebakaran.

                        </li>
                    </ol>


                    <h2 class="mb-4 font-bold">
                        Tindakan Yang Dilakukan Pasca Terjadi Kebakaran
                    </h2>

                    <p class="mb- leading-relaxed">
                        Menurut Badan Penanggulangan Bencana Daerah Kulon Progo, hal-hal yang harus
                        dilakukan pasca terjadi kebakaran khususnya rumah, yaitu :
                    </p>
                    <ol class="mb-5 leading-relaxed">
                        <li>1. Setelah api seluruhnya padam, jangan langsung masuk ke dalam bangunan. Waspada
                            terhadap kerusakan bangunan akibat kebakaran, cek kekuatan bangunan.
                        <li>2. Inventaris barang-barang dan dokumen penting dalam rumah anda sebelum memilah
                            mana yangakan dibuang.
                        </li>
                        <li>3. Bersihkan sisa abu dan runtuhan dengan menggunakan masker dan sarung tangan untuk
                            menghindari hirupan debu..
                        </li>

                    </ol>

                    

                    
            <x-isihome.kebakaran.bagianbawah />
            
            </div>
            </div>
            
        </div>
    </section>

</x-layout>
