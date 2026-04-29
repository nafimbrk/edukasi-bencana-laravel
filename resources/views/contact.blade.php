<x-layout title="Contact">

     <!--contact -->
    <section id="portofolio" class="pt-36 pb-16 bg-teal-700">
      <div class="container w-11/12 mx-auto">
        <div class="w-full">
          <div class="flex flex-col lg:flex-row items-start mb-16">
             <!--Kolom kiri untuk teks "Bacaan Pilihan" -->
            <div class="w-full lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
              <h1 class="font-bold text-white text-3xl mb-6 sm:text-4xl lg:text-6xl">Contact Us</h1>
              <p class="font-normal text-white mb-6">Silahkan kontak kami melalui email untuk kerja sama, mengajukan permintaan school watching, ingin menjadi media partner, atau ingin menjadi kontributor.</p>
            </div>
             <!--Kolom kanan untuk deskripsi -->
            <div class="w-full lg:w-2/3 lg:ml-44">
              <!--<div class="w-full px-4">-->
              <!--  <div class="max-w-4xl mx-auto mb-2">-->
              <!--    <h2 class="font-bold text-white text-lg sm:text-lg lg:text-md">Send Us a Message</h2>-->
              <!--  </div>-->
              <!--</div>-->
  
  
  
  
  
                <div class="w-full px-4">
  <h2 class="font-bold text-white mb-2"><i class="fa-solid fa-location-dot mr-4"></i> Address</h2>
              <h2 class="font-bold text-white ml-8 text-xl lg:text-2xl">Jombang, Jawa Timur</h2>
              <h2 class="font-bold text-white mb-2 mt-10"><i class="fa-solid fa-envelope mr-4"></i> Email</h2>
              <a href="mailto:websainstren@gmail.com" class="font-bold text-white ml-8 text-xl lg:text-2xl underline">websainstren@gmail.com</a>
              </div>
  
  
  
  
  
  
  
              <!--<div class="w-full px-4">-->
              <!--              <div class="w-full max-w-4xl mx-auto">-->
              <!--                  <input type="text" id="name" placeholder="Nama Lengkap" class="w-full bg-slate-200 text-dark py-3 px-4 placeholder-current focus:outline-none focus:ring-teal-700 focus:ring-1 focus:border-teal-700 mb-4">-->
              <!--                  <input type="email" id="email" placeholder="Email" class="w-full bg-slate-200 text-dark py-3 px-4 placeholder-current focus:outline-none focus:ring-teal-700 focus:ring-1 focus:border-teal-700 mb-4">-->
              <!--                  <input type="text" id="subject" placeholder="Subjek" class="w-full bg-slate-200 text-dark py-3 px-4 placeholder-current focus:outline-none focus:ring-teal-700 focus:ring-1 focus:border-teal-700 mb-4">-->
              <!--                  <textarea id="message" placeholder="Pesan" class="w-full bg-slate-200 text-dark py-3 px-4 placeholder-current focus:outline-none focus:ring-teal-700 focus:ring-1 focus:border-teal-700 h-32 mb-4"></textarea>-->

              <!--                  <a href="#" id="sendEmail" class="text-base font-semibold text-black bg-white py-3 px-6 rounded hover:bg-slate-300 transition duration-300">Submit</a>-->
              <!--              </div>-->
              <!--          </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <script>
        document.getElementById('sendEmail').addEventListener('click', function() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            const mailtoLink = `mailto:nafimubarok2005@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent('Nama: ' + name + '\nEmail: ' + email + '\n\nPesan:\n' + message)}`;
            window.location.href = mailtoLink;
        });
    </script>
  
  </x-layout>
  
  
  
  
  
  