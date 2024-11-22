<!-- footer -->
<footer class="bg-slate-200">
  <!-- Konten -->
  <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col md:flex-row md:items-start footer-text-align">
          <!-- Bagian utama -->
          <div class="w-full text-gray-600 font-medium mb-12 md:mb-0">
              <h2 class="font-bold text-2xl text-black mb-4 mt-4">
                  websainstren.com
              </h2>
              <p class="leading-relaxed">
                  Website Literasi Sains dan Digital Kebencanaan Santri Pondok Pesantren
                  (WEB- SAINSTREN) adalah sebuah website yang dapat mudah diakses secara online oleh pengguna ponsel
                  dengan menampilkan pembelajaran tentang kesiapsiagaan bencana dalam kondisi menghadapi bencana yang
                  mungkin terjadi kapan saja, sehingga pembaca dapat mengetahui tentang tindakan pertama yang
                  dilakukan saat terjadi bencana, melakukan antisipasi dan meminimalisir dampak bencana.
              </p>
              <div class="flex flex-wrap justify-center mt-10">
    <!-- Foto 1 -->
    <div class="w-1/2 sm:w-1/4 p-4 flex flex-col items-center">
        <img src="{{ asset('gambar/tim/foto1.png') }}" alt="" class="w-40">
        <p class="mt-2">Nurul Hidayah</p>
    </div>
    
    <!-- Foto 2 -->
    <div class="w-1/2 sm:w-1/4 p-4 flex flex-col items-center">
        <img src="{{ asset('gambar/tim/foto2.png') }}" alt="" class="w-40">
        <p class="mt-2">Pepin Nahariani</p>
    </div>
    
    <!-- Foto 3 -->
    <div class="w-1/2 sm:w-1/4 p-4 flex flex-col items-center">
        <img src="{{ asset('gambar/tim/foto3.png') }}" alt="" class="w-40">
        <p class="mt-2">Anja Hesnia Kholis</p>
    </div>
    
    <!-- Foto 4 -->
    <div class="w-1/2 sm:w-1/4 p-4 flex flex-col items-center">
        <img src="{{ asset('gambar/tim/foto4.png') }}" alt="" class="w-40">
        <p class="mt-2">Abdul Azis</p>
    </div>
</div>

          </div>
      </div>
  </div>

  <!-- Footer credit -->
  <div class="py-9 bg-black text-center">
      <p class="text-white">
          Copyright © 2024
          <a href="/" class="text-blue-500 hover:underline">websainstren.com</a>
      </p>
  </div>
</footer>

<style>
  .footer-text-align {
    text-align: center; /* Default untuk mobile */
}

@media (min-width: 768px) {
    .footer-text-align {
        text-align: left; /* Untuk perangkat besar */
    }
}

</style>