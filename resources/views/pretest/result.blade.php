<x-layoutpretest>
    <h1 class="font-bold text-2xl mb-5">Hasil Pre test</h1>






<hr class="mb-10 mt-10 -mx-8" />


            


<p><span class="font-bold">Nama:</span> {{ $pretest->nama }}</p>
<p><span class="font-bold">Umur:</span> {{ $pretest->umur }}</p>
<p><span class="font-bold">Jenis kelamin:</span> {{ $pretest->jenis_kelamin }}</p>
<p><span class="font-bold">Pendidikan:</span> {{ $pretest->pendidikan }}</p>
<p class="mb-5"><span class="font-bold">Pelatihan kebencanaan:</span> {{ $pretest->pelatihan_kebencanaan }}</p>

    
    <h1 class="font-bold">Pengetahuan:</h1>
    <p>Skor:{{ $pretest->score_pengetahuan }}</p>
    <p>Grade:{{ $pretest->grade_pengetahuan }}</p>
    
    <h1 class="font-bold mt-4">Kesiapsiagaan:</h1>
    <p>Skor:{{ $pretest->score_kesiapsiagaan }}</p>
    <p>Grade:{{ $pretest->grade_kesiapsiagaan }}</p>
    
    
    
    
    
    
    
    <hr class="mb-10 mt-10 -mx-8" />







<div class="text-center md:text-right mb-4">
                <a href="/" class="bg-teal-700 text-white px-4 py-2 rounded-md hover:bg-teal-800">
                    Lanjutkan Membaca
                </a>
            </div>    
    
</x-layoutpretest>
