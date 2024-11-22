<x-layout title="Pengertian Banjir">


    <!-- pengertian -->

    <section class="md:py-20 bg-gray-100">
                <div class="container mx-auto lg:px-8 flex flex-col lg:flex-row lg:space-x-8">
            <div class="bg-white px-6 py-8 lg:px-16 lg:py-24 flex-grow lg:w-3/4 lg:max-w-[69%]">
                <div class="bg-white">
                    <div class="mx-auto">

                        <img src="{{ asset('gambar/banjir/b7.jpeg') }}" alt="" class="w-full" />
                        <h1 class="text-left font-extrabold text-2xl mt-7 mb-2">
                            APA ITU BANJIR
                        </h1>
                        <a href="{{ url('banjir') }}">
                            <p class="mt-3 mb-7 hover:text-teal-700">/ Banjir</p>
                        </a>
                    </div>
                    <x-isihome.banjir.kotak />

                    <h2 class="mt-5 mb-4 font-bold text-lg">Apa Itu Banjir</h2>


                    <p class="mb-4 leading-relaxed">
                        Menurut Setyawan (2008) banjir adalah suatu proses alami, banjir
                        terjadi karena debit air sungai yang sangat tinggi hingga
                        melampaui daya tampung saluran sungai lalu meluap kedaerah
                        sekitarnya. Debit air sungai yang tinggi terjadi karena curah
                        hujan yang tinggi, sementara itu juga dapat terjadi karena
                        kesalahan manusia.
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Bencana banjir merupakan peristiwa atau rangkaian peris tiwa yang
                        mengancam dan mengganggu kehidupan dan penghidupan masyarakat
                        sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan
                        lingkungan, kerugian harta benda, dan berdampak psikologis
                        (Mistra, 2007).
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Daerah rentan banjir adalah daerah yang mudah atau mempunyai
                        kecenderungan untuk terlanda banjir. Maka kawasan rentan banjir
                        merupakan kawasan yang sering atau berpotensi tinggi mengalami
                        bencana banjir. Daerah atau kawasan tersebut dapat diidentifikasi
                        dengan menggunakan pendekatan geomorfologi khususnya aspek
                        morfogenesa, karena kenampakan seperti teras sungai, tanggul alam,
                        dataran banjir, rawa belakang, kipas aluvial, dan delta yang
                        merupakan bentukan banjir yang berulang-ulang yang merupakan
                        bentuk lahan detil yang mempunyai topografi datar, sesuai
                        karakteristik penyebab banjir.
                    </p>
                    <p class="mb-5 leading-relaxed">
                        Sedangkan tingkat kerentanan banjir dapat ditentukan berdasarkan
                        paramater-parameter yang berpengaruh terhadap terjadinya banjir.
                        Dari beberapa penelitian mengenai banjir, telah diketahui bahwa
                        kondisi lahan seperti penutup lahan, topografi, dan geomorfologi
                        juga curah hujan, sebagai salah satu unsur iklim yang utama adalah
                        merupakan faktor-faktor berpengaruh dalam menentukan terjadinya
                        banjir di Indonesia.
                    </p>

                    

                    
            <x-isihome.banjir.bagianbawah />
            </div>
            </div>
            
        </div>
    </section>

</x-layout>
