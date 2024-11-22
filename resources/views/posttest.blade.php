


<!--<x-layoutpretest>-->
<!--        <h2 class="font-bold text-2xl md:text-4xl">-->
<!--            Post test akan muncul setelah Anda menyelesaikan pembelajaran minimal dalam waktu 2 minggu. Terima kasih.-->
<!--        </h2>-->

<!--    <hr class="mb-10 mt-10 -mx-8" />-->

<!--    <div class="text-center md:text-right mb-4 mt-10">-->
<!--        <a href="/" class="bg-teal-700 text-white px-4 py-2 rounded-md hover:bg-teal-800">-->
<!--            Lanjutkan Membaca-->
<!--        </a>-->
<!--    </div>-->
<!--</x-layoutpretest>-->















<x-layoutpretest>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Kuesioner Pengetahuan Dan Kesiapsiagaan Bencana
        </h2>
        <h2 class="text-2xl font-bold text-gray-800">
            Melalui WEB-SAINSTREN (Website Literasi Sains dan Digital Kebencanaan) Terhadap Pengetahuan dan
            Kesiapsiagaan Bencana
            Santri Pondok Pesantren
        </h2>


        <hr class="mb-8 mt-8 -mx-8" />
        <!-- <p class=" mb-6 text-red-600">Penting: Harap Isi Kuesioner Sebelum Melanjutkan</p> -->

        <form action="{{ route('posttest.store') }}" method="POST" id="pretestForm">
            @csrf
            <!-- Identitas Responden -->
            <h3 class="text-xl font-semibold text-gray-800">
                A. Identitas Responden
            </h3>
            <p class="mb-4 text-red-600">
                Harap Isi dan Pilih Jawaban yang Sesuai dengan Identitas Saudara/i
            </p>
            <div class="mb-4">
                <label for="nama" class="block font-medium text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama"
                    class="mt-1 p-2 w-full max-w-md border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700" />
            </div>

            <div class="mb-4">
                <label for="umur" class="block font-medium text-gray-700">Umur:</label>
                <input type="number" id="umur" name="umur"
                    class="mt-1 p-2 w-full max-w-md border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700" />
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Jenis Kelamin:</label>
                <div class="mt-1">
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Laki-laki</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Perempuan"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Perempuan</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-gray-700">Pendidikan:</label>
                <div class="mt-1">
                    <label class="flex items-center">
                        <input type="radio" name="pendidikan" value="Tidak Sekolah"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Tidak Sekolah</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="pendidikan" value="SD"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">SD</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="pendidikan" value="SMP"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">SMP</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="pendidikan" value="SLTA/SMA"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">SLTA/SMA</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="pendidikan" value="Universitas"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Universitas</span>
                    </label>
                </div>
            </div>

            <div class="mb-8">
                <label class="block font-medium text-gray-700">Apakah anda pernah mengikuti pembelajaran,
                    pelatihan/penyuluhan
                    tentang <br />
                    kebencanaan sebelum ini?</label>
                <div class="mt-1">
                    <label class="flex items-center">
                        <input type="radio" name="pelatihan_kebencanaan" value="Ya"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Ya</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="pelatihan_kebencanaan" value="Tidak"
                            class="form-radio h-4 w-4 text-blue-600" />
                        <span class="ml-2">Tidak</span>
                    </label>
                </div>
            </div>

            <hr class="mb-8" />

            <!-- Pengetahuan tanya Bencana -->
            <h3 class="text-xl font-semibold text-gray-800">
                B. Kuesioner dalam Menghadapi Bencana
            </h3>
            <p class="mb-4 text-red-600">
                Berikut ini ada beberapa pertanyaan dan Saudara/i diharapkan
                memberikan
                jawaban yang menurut Saudara/i benar
            </p>

            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                I. Pengetahuan Kesiapsiagaan Bencana
            </h3>

<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300">                 
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Pertanyaan
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Benar
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Salah
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bencana alam adalah fenomena alam yang luar biasa dapat
                            menimbulkan korban jiwa, lingkungan, dan materil
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="bencana_alam_adalah" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="bencana_alam_adalah" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Banjir adalah air sungai yang tingginya melebihi permukaan air
                            normal sehingga melimpah ke permukaan penduduk
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="banjir_adalah_air" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="banjir_adalah_air" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Curah hujan tinggi, pecahnya bendungan sungai, penciutan ruas
                            sungai, dan pembuangan sampah sembarangan merupakan penyebab
                            terjadinya banjir
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="curah_hujan_tinggi" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="curah_hujan_tinggi" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Upaya untuk mencegah terjadinya banjir adalah reboisasi/
                            penghijauan
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="upaya_untuk_mencegah" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="upaya_untuk_mencegah" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ciri-ciri daerah rawan banjir adalah daerah aliran sungai,
                            daerah landai, daerah bantaran sungai, dan daerah pantai
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="ciri_ciri_daerah" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="ciri_ciri_daerah" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Agar resiko bencana banjir berkurang, sebaiknya setiap
                            masyarakat menjaga fungsi dan kebersihan saluran-saluran air,
                            dan tidak membuang sampah sembarangan
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="agar_resiko_bencana" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="agar_resiko_bencana" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Gempa adalah peristiwa bergetarnya bumi akibat pelepasan energi
                            sehingga menciptakan gelombang seismik
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="gempa_adalah_peristiwa" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="gempa_adalah_peristiwa" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Saat terjadi gempa lindungi kepala dan badan dari reruntuhan,
                            mencari tempat aman, jauhi lemari dan kaca
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="saat_terjadi_gempa" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="saat_terjadi_gempa" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Tindakan pencegahan gempa diantaranya mitigasi, sistem
                            peringatan dini, pendidikan dan pelatihan
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="tindakan_pencegahan_gempa" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="tindakan_pencegahan_gempa" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Kebakaran adalah reaksi aksidasi dari bahan bakar yang disertai
                            timbulnya api
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="kebakaran_adalah_reaksi" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="kebakaran_adalah_reaksi" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mematikan jaringan listrik, mengamankan barang berharga di
                            tempat yang tinggi, evakuasi ke tempat yang lebih tinggi
                            merupakan upaya penyelamatan diri saat terjadi banjir
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mematikan_jaringan_listrik" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mematikan_jaringan_listrik" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Upaya mencegah kebakaran adalah melakukan mitigasi dan
                            menyiapkan peralatan pemadam api
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="upaya_mencegah_kebakaran" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="upaya_mencegah_kebakaran" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">13</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Penyebab kebakaran dari faktor manusia berasal dari instalansi
                            listrik, peralatan memasak, dan perilaku
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="penyebab_kebakaran_dari" value="Benar"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="penyebab_kebakaran_dari" value="Salah"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>

            <!-- Rencana Tanggap Darurat -->
            <h3 class="text-xl font-semibold text-gray-800 mb-4 mt-8">
                II. Rencana Tanggap Darurat
            </h3>

<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300">                
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Pertanyaan
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Ya</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah anda akan melakukan evakuasi ketempat yang lebih tinggi
                            saat terjadi banjir/gempa/kebakaran?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_akan" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_akan" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah ditempat anda tersedia peta, tempat, jalur evakuasi, dan
                            tempat berkumpul apabila terjadi bencana?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_peta" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_peta" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah ditempat anda tersedia kotak P3K atau obat- obatan
                            penting untuk pertolongan pertama?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_kotak" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_kotak" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah ditempat anda tersedia alat penerangan ketika dalam
                            keadaan darurat?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_alat" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_ditempat_anda_tersedia_alat" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah anda mempersiapkan tas dan perlengkapan siaga bencana?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_mempersiapkan" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_mempersiapkan" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>

            <!-- Sistem Peringatan Bencana -->
            <h3 class="text-xl font-semibold text-gray-800 mb-4 mt-8">
                III. Sistem Peringatan Bencana
            </h3>

<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300">               
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th>Pertanyaan</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Ya</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah di tempat anda tersedia sumber informasi peringatan
                            bencana ?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_di_tempat" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_di_tempat" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Apakah anda memperoleh informasi peringatan bencana dari
                            TV/radio, sumber yang bersifat lokal, SMS?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_memperoleh" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="apakah_anda_memperoleh" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Pernakah anda mengikuti pembelajaran,pelatihan peringatan
                            bencana/tanya bencana?
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pernakah_anda_mengikuti" value="Ya"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pernakah_anda_mengikuti" value="Tidak"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>

            <!-- Aktivitas dalam Mempersiapkan Bencana -->
            <h3 class="text-xl font-semibold text-gray-800 mb-4 mt-8">
                tanya dibawah ini adalah mengenai aktivitas dalam mempersiapkan
                bencana
            </h3>

            <!--<table class="w-full border-collapse border border-gray-300">-->
            <div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Butir Kesiapsiagaan
                        </th>

                        <th></th>
                        <th></th>
                        <th class="px-4 py-2 text-center">Skala Respon</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Telah menyiapkan butir-butir dibawah ini untuk setiap anggota
                            keluarga
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak sama sekali / 0%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Sedikit / 25%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Beberapa / 50%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Kebanya kan / 75%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Semua / 100%
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Pasokan makanan dan air selama 3 hari
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pasokan_makanan_dan" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pasokan_makanan_dan" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pasokan_makanan_dan" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pasokan_makanan_dan" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="pasokan_makanan_dan" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">Baterai tambahan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="baterai_tambahan" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="baterai_tambahan" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="baterai_tambahan" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="baterai_tambahan" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="baterai_tambahan" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Radio bertenaga baterai
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="radio_bertenaga_baterai" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="radio_bertenaga_baterai" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="radio_bertenaga_baterai" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="radio_bertenaga_baterai" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="radio_bertenaga_baterai" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Senter yang dioperasikan baterai
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="senter_yang_dioperasikan_baterai" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="senter_yang_dioperasikan_baterai" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="senter_yang_dioperasikan_baterai" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="senter_yang_dioperasikan_baterai" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="senter_yang_dioperasikan_baterai" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Peralatam P3K (Pertolongan Pertama Pada Kecelakaan)
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peralatan_p3k" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peralatan_p3k" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peralatan_p3k" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peralatan_p3k" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peralatan_p3k" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-300 px-4 py-2">Peluit</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peluit" value="0%" class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peluit" value="25%" class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peluit" value="50%" class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peluit" value="75%" class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="peluit" value="100%" class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-300 px-4 py-2">Sepatu bot</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="sepatu_bot" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="sepatu_bot" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="sepatu_bot" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="sepatu_bot" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="sepatu_bot" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-300 px-4 py-2">Jas hujan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="jas_hujan" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="jas_hujan" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="jas_hujan" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="jas_hujan" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="jas_hujan" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Uang untuk keadaan darurat
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="uang_untuk_keadaan_darurat" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="uang_untuk_keadaan_darurat" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="uang_untuk_keadaan_darurat" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="uang_untuk_keadaan_darurat" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="uang_untuk_keadaan_darurat" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>


<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300 mt-14">      
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Butir Kesiapsiagaan
                        </th>

                        <th></th>
                        <th></th>
                        <th class="px-4 py-2 text-center">Skala Respon</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Anggota tempat tinggal memiliki pengetahuan berikut
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak sama sekali / 0%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Sedikit / 25%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Beberapa / 50%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Kebanya kan / 75%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Semua / 100%
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengetahui ancaman bencana banjir, gempa, kebakaran yang bisa
                            terjadi di sekitar rumah
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_ancaman_bencana" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_ancaman_bencana" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_ancaman_bencana" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_ancaman_bencana" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_ancaman_bencana" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengetahui bagian mana dari tempat tinggal yang berbahaya saat
                            banjir/gempa/kebakaran
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_bagian_mana" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_bagian_mana" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_bagian_mana" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_bagian_mana" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_bagian_mana" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengetahui cara melindungi anggota keluarga saat banjir
                            /gempa/kebakaran melanda
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_cara_melindungi" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_cara_melindungi" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_cara_melindungi" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_cara_melindungi" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_cara_melindungi" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengetahui sistem peringatan dini local untuk bencana
                            banjir/gempa/kebakaran
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_sistem_peringatan" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_sistem_peringatan" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_sistem_peringatan" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_sistem_peringatan" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_sistem_peringatan" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengetahui lokasi evakuasi, titik kumpul, pengungsian terdekat
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_lokasi_evakuasi" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_lokasi_evakuasi" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_lokasi_evakuasi" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_lokasi_evakuasi" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengetahui_lokasi_evakuasi" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>


<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300 mt-14">     
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Butir Kesiapsiagaan
                        </th>

                        <th></th>
                        <th></th>
                        <th class="px-4 py-2 text-center">Skala Respon</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            <!-- Anggota tempat tinggal memiliki pengetahuan berikut -->
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak sama sekali / 0%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Sedikit / 25%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Beberapa / 50%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Kebanya kan / 75%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Semua / 100%
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mengadakan pertemuan untuk rencana evakuasi bencana selama
                            setahun terakhir
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengadakan_pertemuan_untuk" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengadakan_pertemuan_untuk" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengadakan_pertemuan_untuk" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengadakan_pertemuan_untuk" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mengadakan_pertemuan_untuk" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Memiliki rencana tentang cara mencari anggota tempat tinggal
                            yang hilang
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="memiliki_rencana_tentang" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="memiliki_rencana_tentang" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="memiliki_rencana_tentang" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="memiliki_rencana_tentang" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="memiliki_rencana_tentang" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mempraktikkan rencana tanya yang telah disepakati
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mempraktikkan_rencana_tanya" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mempraktikkan_rencana_tanya" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mempraktikkan_rencana_tanya" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mempraktikkan_rencana_tanya" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mempraktikkan_rencana_tanya" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Menyesuaikan rencana sesuai kondisi terkini ancaman bencana
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menyesuaikan_rencana_sesuai" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menyesuaikan_rencana_sesuai" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menyesuaikan_rencana_sesuai" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menyesuaikan_rencana_sesuai" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menyesuaikan_rencana_sesuai" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>

<div style="overflow-x: auto;">
            <table class="w-full table-auto border-collapse border border-gray-300 mt-14">               
            <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Butir Kesiapsiagaan
                        </th>

                        <th></th>
                        <th></th>
                        <th class="px-4 py-2 text-center">Skala Respon</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            (perubahan anggota dan kondisi tempat tinggal)
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Tidak sama sekali / 0%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Sedikit / 25%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Beberapa / 50%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Kebanya kan / 75%
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Semua / 100%
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Membahas rencana komunikasi kebencanaan dengan anggota keluarga
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="membahas_rencana_komunikasi" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="membahas_rencana_komunikasi" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="membahas_rencana_komunikasi" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="membahas_rencana_komunikasi" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="membahas_rencana_komunikasi" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Mencatat nomor anggota telepon anggota tempat tinggal
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mencatat_nomor_anggota" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mencatat_nomor_anggota" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mencatat_nomor_anggota" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mencatat_nomor_anggota" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="mencatat_nomor_anggota" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Menuliskan nomor penting yang terkait dengan aktivitas setiap
                            anggota (yaitu: nomor telepon kantor, sekolah, guru, teman baik)
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_penting" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_penting" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_penting" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_penting" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_penting" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Menuliskan nomor telepon kontak darurat yang terkait situasi
                            bencana atau darurat
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_telepon" value="0%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_telepon" value="25%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_telepon" value="50%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_telepon" value="75%"
                                class="form-radio text-blue-600" />
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="radio" name="menuliskan_nomor_telepon" value="100%"
                                class="form-radio text-blue-600" />
                        </td>
                    </tr>

                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>
            
        <hr class="mb-10 mt-10 -mx-8" />


            <div class="text-center md:text-right mb-4">
        <button type="submit" id="submitButton" class="text-white px-4 py-2 rounded-md bg-gray-400 cursor-not-allowed" disabled>
                    Submit
                </button>
            </div>
        </form>
</x-layoutpretest>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('pretestForm');
        const submitButton = document.getElementById('submitButton');

        // Function to check if all required inputs are filled
        function checkFormCompletion() {
            let allFilled = true;

            // Check all input fields and textareas
            form.querySelectorAll('input[type="text"], input[type="email"], textarea').forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });

            // Check radio buttons: Ensure that one option per group is selected
            form.querySelectorAll('input[type="radio"]').forEach(radio => {
                const radioName = radio.name;
                if (!form.querySelector(`input[name="${radioName}"]:checked`)) {
                    allFilled = false;
                }
            });

            if (allFilled) {
                // Enable the submit button and change its style
                submitButton.disabled = false;
                submitButton.classList.remove('bg-gray-400', 'cursor-not-allowed');
                submitButton.classList.add('bg-teal-700', 'hover:bg-teal-800', 'cursor-pointer');
            } else {
                // Keep the submit button disabled and keep its gray style
                submitButton.disabled = true;
                submitButton.classList.add('bg-gray-400', 'cursor-not-allowed');
                submitButton.classList.remove('bg-teal-700', 'hover:bg-teal-800', 'cursor-pointer');
            }
        }

        // Add event listeners to all form inputs to check on input/change
        form.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('input', checkFormCompletion);
        });

        // Check form completion when a radio button is selected
        form.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', checkFormCompletion);
        });
    });
</script>
