<x-layout title="Home">















   <section id="hero" class="bg-no-repeat bg-center bg-cover h-screen bg-teal-700" style="background-image: url(gambar/bg.jpg);">
    <div class="container mx-auto h-full flex flex-col justify-center px-6 lg:px-12">
        <div class="flex flex-col items-center md:items-start">
            <div class="text-center md:text-left">
                <h3 class="text-white text-4xl lg:text-7xl font-bold mb-4 leading-tight">WEB-SAINTREN</h3>
                <h3 class="text-white text-3xl lg:text-6xl font-bold mb-4 leading-tight">
                    <span class="block md:inline">Siap Sigap</span> Tanggap Bencana
                    <br class="hidden lg:block"> <!-- Menambahkan line break untuk layar besar -->
                    <div class="md:h-2"></div>
                    <span class="block md:inline">Pelajari Kesiapsiagaan</span> Jamin Keamanan
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Optional custom CSS -->
<style>
    @media (min-width: 768px) {
        #hero .container {
            text-align: left;
        }
        #hero .flex-col {
            align-items: flex-start; /* Konten di-align ke kiri */
        }
        #hero .text-center {
            text-align: left;
        }
    }
</style>

  
  









    <!-- Artikel Terbaru -->
    {{-- <section id="about" class="w-full py-20 bg-slate-100">
        <div class="container mx-auto px-6 md:px-14">
            <!-- Heading dan Garis Bawah -->
            <div class="mb-14 ">
                <h2 class="text-3xl font-bold mb-3 text-center md:text-left">Artikel Terbaru</h2>
                <div class="w-24 h-1 bg-teal-700 mx-auto md:mx-0"></div>
            </div>

            <!-- Artikel -->
            <div class="space-y-10">
                <!-- Artikel 1 -->
                <div class="flex flex-col md:flex-row items-start mb-10">
                    <a href="{{ url('berita-2') }}" class="w-full md:w-1/3 h-72 mb-4 md:mb-0">
                        <img src="{{ asset('gambar/berita/berita2.png') }}" alt=""
                            class="w-full h-full object-cover" />
                    </a>
                    <div class="w-full md:max-w-xl md:pl-6">
                        <a href="{{ url('berita-2') }}" class="hover:text-teal-700 transition duration-300">
                            <h3 class="text-2xl font-bold mb-4">
                                Penyerahan Alat-alat Siaga Bencana ke Pondok Pesantren Al Muhibbin Jombang
                            </h3>
                        </a>
                        <p class="mb-5 leading-relaxed">
                            Kamis (8/08/2024) Pada pertemuan kelima, tim PKM-PM Santri Of Source Pondok Pesantren
                            (SOSTREN)
                            kembali mendatangi Pondok Pesantren Al-Muhibbin Jombang didampingi...
                        </p>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="flex flex-col md:flex-row items-start mb-10">
                    <a href="{{ url('berita-3') }}" class="w-full md:w-1/3 h-72 mb-4 md:mb-0">
                        <img src="{{ asset('gambar/berita/berita3.png') }}" alt=""
                            class="w-full h-full object-cover" />
                    </a>
                    <div class="w-full md:max-w-xl md:pl-6">
                        <a href="{{ url('berita-3') }}" class="hover:text-teal-700 transition duration-300">
                            <h3 class="text-2xl font-bold mb-4">
                                Simulasi Kebencanaan Bagi Santri Dan Santriwati Di Pondok Pesantren Jombang
                            </h3>
                        </a>
                        <p class="mb-5 leading-relaxed">
                            Jum’at (19/07/2024) Tidak hanya melakukan simulasi pada Santri, tim dari STIKES PEMKAB
                            JOMBANG
                            dan BPBD (Badan Penanggulangan Bencana Daerah) Kabupaten Jombang juga melaksanakan...
                        </p>
                    </div>
                </div>

                <!-- Tombol Baca Berita Lainnya -->
                <div class="text-center">
                    <a href="#"
                        class="font-medium bg-teal-700 text-white py-3 px-6 rounded hover:bg-teal-600 transition duration-300 border border-black">Baca
                        Berita Lainnya</a>
                </div>
            </div>

            <!-- Garis Bawah -->
            <div class="w-full h-0.5 bg-teal-700 mt-32"></div>
        </div>
    </section> --}}


    <section id="about" class="w-full py-20 bg-slate-100">
      <div class="container mx-auto px-6 md:px-8">
        <!-- Heading dan Garis Bawah -->
        <div class="mb-14">
          <!-- Tambahkan flex dan justify-center untuk h2 -->
          <div class="flex justify-center md:justify-start">
            <h2 class="text-3xl font-bold mb-3">Artikel Terbaru</h2>
          </div>
          <div class="flex justify-center md:justify-start">
            <div class="w-24 h-1 bg-teal-700"></div>
          </div>
        </div>
        
        <!-- Artikel -->
        <div class="space-y-10">
            <!-- Artikel 1 -->
            <div class="flex flex-col md:flex-row items-start mb-10">
                <a href="{{ url('berita-1') }}" class="w-full md:w-1/3 h-72 mb-4 md:mb-0">
                    <img src="{{ asset('gambar/berita/berita.png') }}" alt="" class="w-full h-full object-cover" />
                </a>
                <div class="w-full md:max-w-xl md:pl-6">
                    <a href="{{ url('berita-1') }}" class="hover:text-teal-700 transition duration-300">
                        <h3 class="text-2xl font-bold mb-4">
Penyerahan Alat-alat Siaga Bencana ke Pondok Pesantren
</h3>
                    </a>
                    <p class="mb-5 leading-relaxed">
                        Kamis (8/08/2024) Pada pertemuan kelima, Tim Edukasi Bencana kembali mendatangi Pondok Pesantren  didampingi dengan Ibu dosen pendamping mengadakan acara...
                    </p>
                </div>
            </div>
    
            <!-- Artikel 2 -->
            <div class="flex flex-col md:flex-row items-start mb-10">
                <a href="{{ url('berita-2') }}" class="w-full md:w-1/3 h-72 mb-4 md:mb-0">
                    <img src="{{ asset('gambar/berita/berita2.png') }}" alt="" class="w-full h-full object-cover" />
                </a>
                <div class="w-full md:max-w-xl md:pl-6">
                    <a href="{{ url('berita-2') }}" class="hover:text-teal-700 transition duration-300">
                        <h3 class="text-2xl font-bold mb-4">
Bencana Banjir dan Kebakaran Menjadi Salah Satu Masalah Serius! Begini Sosialisasinya
</h3>
                    </a>
                    <p class="mb-5 leading-relaxed">
                        Kamis (13/06/2024) Pada pertemuan kedua, diadakan penyuluhan yang bertajuk “Mitigasi Bencana Banjir dan Kebakaran”. Selain itu, juga diadakan...
                    </p>
                </div>
            </div>
            
            <!-- Artikel 2 -->
            <div class="flex flex-col md:flex-row items-start mb-10">
                <a href="{{ url('berita-3') }}" class="w-full md:w-1/3 h-72 mb-4 md:mb-0">
                    <img src="{{ asset('gambar/berita/berita3.png') }}" alt="" class="w-full h-full object-cover" />
                </a>
                <div class="w-full md:max-w-xl md:pl-6">
                    <a href="{{ url('berita-3') }}" class="hover:text-teal-700 transition duration-300">
                        <h3 class="text-2xl font-bold mb-4">
SIMULASI KEBENCANAAN BAGI SANTRI DAN SANTRIWATI DI PONDOK PESANTREN JOMBANG
</h3>
                    </a>
                    <p class="mb-5 leading-relaxed">
                        Jum’at (19/07/2024) Tidak hanya melakukan simulasi pada Santri, tim dari STIKES PEMKAB JOMBANG dan BPBD (Badan Penanggulangan Bencana Daerah) Kabupaten Jombang juga melaksanakan...
                    </p>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
          
            
            
            
            
            
            
            
    
            <!-- Tombol Baca Berita Lainnya -->
            <div class="flex justify-center md:justify-start">
              <a href="berita"
                    class="font-medium bg-teal-700 text-white py-3 px-6 rounded hover:bg-teal-600 transition duration-300 border border-black">Baca Berita Lainnya</a>
            </div>
        </div>
    
        <!-- Garis Bawah -->
        <div class="w-full h-0.5 bg-teal-700 mt-32"></div>
      </div>
    </section>
    
    







    <!-- kata-kata -->
    <section id="clients" class="pt-[1.5rem] pb-24 bg-slate-100 relative z-10">
        <div class="container w-11/12 mx-auto">
            <div class="w-full mb-16">
                <div class="relative">
                    <!-- Tanda petik -->
                    <!-- Teks -->
                    <p class="font-bold left-0 text-gray-600 text-3xl sm:text-4xl lg:text-5xl">
                        <i>"
                            Bencana sering terjadi diluar kendali, tetapi yang dapat dikendalikan adalah sikap dalam
                            menghadapi bencana, mengenali bahaya dan melakukan manajemen resiko adalah pengetahuan
                            berharga.
                            Kepedulian terhadap lingkungan adalah langkah awal untuk menyelamatkan masa depan
                            "
                        </i>
                    </p>

                    <!-- Penulis -->
                    <p class="text-gray-600 text-xl font-bold mt-7">
                        Nurul Hidayah - Founder websainstren.com
                    </p>
                </div>
            </div>
        </div>
    </section>

<section id="carousel" class="w-full py-20">
    <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-3xl font-bold mb-6 mx-2 text-center md:text-left">Poster dan Leaflet</h2>
<!--        <div class="relative overflow-hidden">-->
            <!-- Carousel Wrapper -->
<!--            <div class="carousel-wrapper flex transition-transform duration-300 ease-in-out">-->
                <!-- Slide 1 -->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-">-->
                    <!--<div class="bg-gray-200 p-4 rounded-lg shadow-md">-->
<!--                        <img src="{{ asset('gambar/poster/gambar1.png') }}" alt="Instagram Post" class="w-full max-h-100 rounded-lg">-->
                    <!--</div>-->
<!--                </div>-->
                <!-- Slide 2 -->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--                        <img src="{{ asset('gambar/poster/gambar2.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
                <!-- Slide 3 -->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--                        <img src="{{ asset('gambar/poster/gambar3.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--                        <img src="{{ asset('gambar/poster/gambar4.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--                        <img src="{{ asset('gambar/poster/gambar5.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--                        <img src="{{ asset('gambar/poster/gambar6.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
<!--                <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">-->
<!--\                        <img src="{{ asset('gambar/poster/gambar7.png') }}" alt="Instagram Post" class="w-full rounded-lg">-->
<!--                </div>-->
                <!-- Add more slides as needed -->
<!--            </div>-->
            <!-- Navigation Buttons -->
<!--            <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none prev-slide">-->
<!--                <i class="fa-solid fa-chevron-left"></i>-->
<!--            </button>-->
<!--            <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none next-slide">-->
<!--                <i class="fa-solid fa-chevron-right"></i>-->
<!--            </button>-->
            <!-- Bullet Indicators -->
<!--            <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">-->
                <!-- Dynamic Bullet Indicators -->
<!--                <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>-->
<!--                <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>-->
<!--                <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>-->
                <!-- Add more indicators as needed -->
<!--            </div>-->
<!--        </div>-->

<div class="relative overflow-hidden">
    <!-- Carousel Wrapper -->
    <div class="carousel-wrapper flex transition-transform duration-300 ease-in-out">
        <!-- Slide 1 -->
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar1.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar2.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar3.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar4.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar5.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar6.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <div class="carousel-slide flex-shrink-0 w-full lg:w-1/3 p-2">
            <img src="{{ asset('gambar/poster/gambar7.png') }}" alt="Instagram Post" class="w-full h-72 md:h-80 rounded-lg">
        </div>
        <!-- Add more slides as needed -->
    </div>
    <!-- Navigation Buttons -->
    <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none prev-slide">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full focus:outline-none next-slide">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
    <!-- Bullet Indicators -->
    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <!-- Dynamic Bullet Indicators -->
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <span class="carousel-indicator w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
        <!-- Add more indicators as needed -->
    </div>
</div>

    </div>
</section>


<style>
    /* Custom Styles */
.carousel-wrapper {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-slide {
    flex: 0 0 auto; /* Prevents flex items from growing or shrinking */
}

.carousel-indicator {
    background-color: gray;
    transition: background-color 0.3s;
}

.carousel-indicator.active {
    background-color: teal;
}

</style>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const prevBtn = document.querySelector('.prev-slide');
        const nextBtn = document.querySelector('.next-slide');
        const carouselWrapper = document.querySelector('.carousel-wrapper');
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const slideCount = slides.length;
        const slideWidth = slides[0].offsetWidth; // Get the width of the first slide
        let currentIndex = 0;

        function updateCarousel() {
            const offset = -currentIndex * slideWidth;
            carouselWrapper.style.transform = `translateX(${offset}px)`;
            updateIndicators();
        }

        function updateIndicators() {
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        prevBtn.addEventListener('click', function () {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : slideCount - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', function () {
            currentIndex = (currentIndex < slideCount - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        });

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function () {
                currentIndex = index;
                updateCarousel();
            });
        });

        updateCarousel(); // Initialize carousel position
    });
</script>









</x-layout>
