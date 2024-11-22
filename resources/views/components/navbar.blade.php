{{-- <header class="bg-white sticky top-0 z-50">
    <nav class="text-dark w-11/12 md:container mx-auto py-6 flex justify-between items-center">
        <a href="index.html" class="tracking-wider pl-6">
            <img src="{{ asset('gambar/logo.png') }}" alt="" class="w-[80px] h-[60px]" />
        </a>
        <ul id="nav-menu" class="menu hidden md:flex md:bg-white md:relative md:top-0 md:divide-y-0 md:w-auto ml-80">
            <li
                class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li class="relative px-4 py-1 group">
                <a href="#"
                    class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">Bencana
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg">
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('gempabumi') }}">Gempabumi</a></li>
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('banjir') }}">Banjir</a></li>
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('kebakaran') }}">Kebakaran</a></li>
                </ul>
            </li>
            <li
                class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('berita') }}">Berita</a>
            </li>
            <li
                class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('about') }}">About</a>
            </li>
            <li
                class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('contact') }}">Contact</a>
            </li>
        </ul>

        <ul class="flex space-x-4 ml-auto items-center">
            @auth
                <li class="relative px-4 py-1 group">
                    <a href="#"
                        class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                        {{ auth()->user()->name }}
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg z-10 min-w-max">

                        @if (!$hasAbsen)
                            <form id="absenFormNavbar" action="{{ route('absen.store') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>

                            <!-- Tombol Absen di Navbar -->
                            <li>
                                <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button"
                                    aria-label="Absen Hari Ini"
                                    onclick="document.getElementById('absenFormNavbar').submit();">
                                    <i class="fa-regular fa-calendar-check"></i> Absen
                                </a>
                            </li>
                        @endif



                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:text-teal-600">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
        </ul>




        <button id="hamburger-menu" class="hamburger-menu text-2xl md:hidden">
            <i class="fa-solid fa-bars tracking-wide"></i>
            <i class="fa-solid fa-xmark hidden tracking-wide"></i>
        </button>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const navMenu = document.getElementById("nav-menu");
    const barIcon = hamburgerMenu.querySelector(".fa-bars");
    const xIcon = hamburgerMenu.querySelector(".fa-xmark");

    hamburgerMenu.addEventListener("click", function() {
        navMenu.classList.toggle("hidden");
        barIcon.classList.toggle("hidden");
        xIcon.classList.toggle("hidden");
    });
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll("nav a");
        links.forEach((link) => {
            if (link.href === window.location.href) {
                link.classList.add("text-teal-700");
            }
        });
    });
</script> --}}



































 















 {{-- <header class="bg-white sticky top-0 z-50">
    <nav class="w-full md:container mx-auto py-6 flex justify-between items-center">
        <a href="index.html" class="pl-6">
            <img src="{{ asset('gambar/logo.png') }}" alt="" class="w-[80px] h-[60px]" />
        </a>

        <!-- Regular Navbar (Visible on large screens) -->
        <ul id="nav-menu" class="menu hidden md:flex md:bg-white md:relative md:top-0 md:divide-y-0 md:w-auto ml-auto">
            <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="relative px-4 py-1 group">
                <a href="#" class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                    Bencana
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg">
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('gempabumi') }}">Gempabumi</a></li>
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('banjir') }}">Banjir</a></li>
                    <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('kebakaran') }}">Kebakaran</a></li>
                </ul>
            </li>
            <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('berita') }}">Berita</a>
            </li>
            <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('about') }}">About</a>
            </li>
            <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                <a href="{{ url('contact') }}">Contact</a>
            </li>

            @auth
            <li class="relative px-4 py-1 group">
                <a href="#" class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                    {{ auth()->user()->name }}
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg z-10 min-w-max">
                    @if (!$hasAbsen)
                        <form id="absenFormNavbar" action="{{ route('absen.store') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li>
                            <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button" aria-label="Absen Hari Ini" onclick="document.getElementById('absenFormNavbar').submit();">
                                <i class="fa-regular fa-calendar-check"></i> Absen
                            </a>
                        </li>
                    @endif
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:text-teal-600">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
        </ul>

        <!-- Hamburger Menu (Visible on small screens) -->
        <button class="md:hidden text-2xl mr-4" id="toggle-menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <!-- Sidebar Menu (Hidden by default) -->
    <div id="sidebar-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex flex-col h-full">
            <div class="flex flex-col p-4 border-b border-gray-200">
                @auth
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-user-circle text-2xl"></i>
                        <span class="font-medium">{{ auth()->user()->name }}</span>
                    </div>
                @endauth
            </div>
            <div class="flex-grow">
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-gray-200">Home</a></li>
                    <li><a href="{{ url('gempabumi') }}" class="block px-4 py-2 hover:bg-gray-200">Gempabumi</a></li>
                    <li><a href="{{ url('banjir') }}" class="block px-4 py-2 hover:bg-gray-200">Banjir</a></li>
                    <li><a href="{{ url('kebakaran') }}" class="block px-4 py-2 hover:bg-gray-200">Kebakaran</a></li>
                    <li><a href="{{ url('berita') }}" class="block px-4 py-2 hover:bg-gray-200">Berita</a></li>
                    <li><a href="{{ url('about') }}" class="block px-4 py-2 hover:bg-gray-200">About</a></li>
                    <li><a href="{{ url('contact') }}" class="block px-4 py-2 hover:bg-gray-200">Contact</a></li>
                    @if (!$hasAbsen)
                        <li>
                            <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button" aria-label="Absen Hari Ini" onclick="document.getElementById('absenFormSidebar').submit();">
                                <i class="fa-regular fa-calendar-check"></i> Absen
                            </a>
                        </li>
                        <form id="absenFormSidebar" action="{{ route('absen.store') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="absolute top-4 right-4">
            <button id="close-sidebar" class="text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
</header>




<style>
    /* Menyembunyikan elemen navbar reguler pada tampilan mobile */
#nav-menu {
    @apply hidden md:flex md:bg-white md:relative md:top-0 md:divide-y-0 md:w-auto;
}

/* Menampilkan sidebar menu saat hamburger menu diklik */
#sidebar-menu {
    @apply fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out;
}

#sidebar-menu.show {
    @apply translate-x-0;
}

/* Menyembunyikan sidebar menu pada tampilan non-mobile */
@media (min-width: 768px) {
    #sidebar-menu {
        @apply hidden;
    }
}

</style>



<script>
    document.addEventListener("DOMContentLoaded", function() {
    const toggleMenu = document.getElementById('toggle-menu');
    const sidebarMenu = document.getElementById('sidebar-menu');
    const closeSidebar = document.getElementById('close-sidebar');

    toggleMenu.addEventListener('click', function() {
        sidebarMenu.classList.toggle('translate-x-full');
        sidebarMenu.classList.toggle('show');  // Menambahkan atau menghapus kelas 'show' untuk menampilkan sidebar
    });

    closeSidebar.addEventListener('click', function() {
        sidebarMenu.classList.add('translate-x-full');
        sidebarMenu.classList.remove('show');  // Menghapus kelas 'show' saat menutup sidebar
    });

    document.addEventListener('click', function(event) {
        if (!sidebarMenu.contains(event.target) && !toggleMenu.contains(event.target)) {
            sidebarMenu.classList.add('translate-x-full');
            sidebarMenu.classList.remove('show');
        }
    });
});

</script> 




 


 --}}




















 <header class="bg-white sticky top-0 z-50 shadow-lg">
    <nav class="w-full md:container mx-auto py-6 flex justify-between items-center">
        <a href="/" class="pl-6">
            <img src="{{ asset('gambar/logo.png') }}" alt="" class="w-[80px] h-[60px]" />
        </a>

        <!-- Regular Navbar (Visible on large screens) -->
        <!--<ul id="nav-menu" class="menu hidden md:flex md:bg-white md:relative md:top-0 md:divide-y-0 md:w-auto ml-80">-->
        <!--    <li-->
        <!--        class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">-->
        <!--        <a href="{{ url('/') }}">Home</a>-->
        <!--    </li>-->

        <!--    <li class="relative px-4 py-1 group">-->
        <!--        <a href="#"-->
        <!--            class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">Bencana-->
        <!--            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"-->
        <!--                xmlns="http://www.w3.org/2000/svg">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>-->
        <!--            </svg>-->
        <!--        </a>-->
        <!--        <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg">-->
        <!--            <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('gempabumi') }}">Gempabumi</a></li>-->
        <!--            <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('banjir') }}">Banjir</a></li>-->
        <!--            <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('kebakaran') }}">Kebakaran</a></li>-->
        <!--        </ul>-->
        <!--    </li>-->
        <!--    <li-->
        <!--        class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">-->
        <!--        <a href="{{ url('berita') }}">Berita</a>-->
        <!--    </li>-->
        <!--    <li-->
        <!--        class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">-->
        <!--        <a href="{{ url('about') }}">About</a>-->
        <!--    </li>-->
        <!--    <li-->
        <!--        class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">-->
        <!--        <a href="{{ url('contact') }}">Contact</a>-->
        <!--    </li>-->







            
            
            
            
        <!--    <ul class="flex space-x-4 ml-auto items-center">-->
    
        <!--        @auth-->
        <!--        <li class="relative px-4 py-1 group">-->
        <!--            <a href="#"-->
        <!--                class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">-->
        <!--                {{ auth()->user()->name }}-->
        <!--                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"-->
        <!--                    xmlns="http://www.w3.org/2000/svg">-->
        <!--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>-->
        <!--                </svg>-->
        <!--            </a>-->
        <!--            <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg z-10 min-w-max">-->
    
        <!--                @if (!$hasAbsen)-->
        <!--                    <form id="absenFormNavbar" action="{{ route('absen.store') }}" method="POST"-->
        <!--                        style="display: none;">-->
        <!--                        @csrf-->
        <!--                    </form>-->
    
                            <!-- Tombol Absen di Navbar -->
        <!--                    <li>-->
        <!--                        <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button"-->
        <!--                            aria-label="Absen Hari Ini"-->
        <!--                            onclick="document.getElementById('absenFormNavbar').submit();">-->
        <!--                            <i class="fa-regular fa-calendar-check"></i> Absen-->
        <!--                        </a>-->
        <!--                    </li>-->
        <!--                @endif-->
    
    
    
        <!--                <li>-->
        <!--                    <form action="/logout" method="post">-->
        <!--                        @csrf-->
        <!--                        <button type="submit" class="block w-full text-left px-4 py-2 hover:text-teal-600">-->
        <!--                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout-->
        <!--                        </button>-->
        <!--                    </form>-->
        <!--                </li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--    @endauth-->
        <!--    </ul>-->
        <!--</ul>-->
        
        
        
        <ul id="nav-menu" class="menu hidden md:flex md:bg-white md:relative md:top-0 md:divide-y-0 md:w-full items-center">
    <div class="flex justify-center mx-auto w-full ml-32 space-x-6">
        <!-- Menu lainnya di tengah -->
        <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li class="relative px-4 py-1 group">
            <a href="#"
                class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">Bencana
                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg">
                <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('gempabumi') }}">Gempabumi</a></li>
                <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('banjir') }}">Banjir</a></li>
                <li><a class="block px-4 py-2 hover:text-teal-600" href="{{ url('kebakaran') }}">Kebakaran</a></li>
            </ul>
        </li>
        <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
            <a href="{{ url('berita') }}">Berita</a>
        </li>
        <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
            <a href="{{ url('about') }}">About Us</a>
        </li>
        <li class="px-4 py-1 hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
            <a href="{{ url('contact') }}">Contact Us</a>
        </li>
    </div>

    <!-- Menu user auth tetap di kanan -->
    <ul class="flex space-x-4 items-center whitespace-nowrap">
        @auth
        <li class="relative px-4 py-1 group">
            <a href="#"
                class="inline-flex items-center hover:scale-125 ease-in-out duration-300 hover:text-teal-600 font-normal text-base tracking-wide">
                {{ auth()->user()->name }}
                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <ul class="absolute hidden text-gray-700 pt-2 mt-1 group-hover:block bg-white shadow-lg z-10 min-w-max">
    @if (isset($hasAbsen) && !$hasAbsen)
    <form id="absenFormNavbar" action="{{ route('absen.store') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <li>
        <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button" aria-label="Absen Hari Ini" onclick="document.getElementById('absenFormNavbar').submit();">
            <!--<i class="fa-regular fa-calendar-check"></i>-->
            Absen
        </a>
    </li>
@endif

<li>
@if(isset($hasPretest) && !$hasPretest)
    <a href="{{ route('pretest.index') }}" class="block w-full text-left px-4 py-2 hover:text-teal-600">Pre test</a>
@endif
</li>



<li>
    @if(isset($hasPosttest) && !$hasPosttest)
    <a href="{{ route('posttest.index') }}" class="block w-full text-left px-4 py-2 hover:text-teal-600">Post test</a>
    @endif
</li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:text-teal-600">
                            <!--<i class="fa-solid fa-arrow-right-from-bracket"></i> -->
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
        @endauth
    </ul>
</ul>


        
        







        

        
        <!-- Hamburger Menu (Visible on small screens) -->
        <button class="md:hidden text-2xl mr-4 mt-3 bg-teal-700 text-white py-2 px-3 shadow-md hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500" id="toggle-menu">
            <i class="fa-solid fa-bars"></i>
        </button>     
<style>
    #toggle-menu {
    transition: background-color 0.3s, box-shadow 0.3s;
}
</style>
    </nav>

    <!-- Sidebar Menu (Hidden by default) -->
    <div id="sidebar-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex flex-col h-full">
            <div class="flex flex-col p-6 border-b border-gray-200">
                @auth
                    <div class="flex items-center space-x-2">
                        <!--<i class="fa-solid fa-user-circle text-2xl"></i>-->
                        <span class="font-medium">{{ auth()->user()->name }}</span>
                    </div>
                @endauth
            </div>
            <div class="flex-grow">
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-gray-200">Home</a></li>
                    
                    <!-- Dropdown for Bencana -->
                    <li>
                        <button id="bencana-menu-toggle" class="block px-4 py-2 w-full text-left hover:bg-gray-200 flex items-center">
                            Bencana
                            <i id="bencana-menu-icon" class="fa-solid fa-chevron-down ml-auto"></i>
                        </button>
                        <ul id="bencana-menu" class="hidden pl-4 space-y-2 mt-2">
                            <li><a href="{{ url('gempabumi') }}" class="block px-4 py-2 hover:bg-gray-200">Gempabumi</a></li>
                            <li><a href="{{ url('banjir') }}" class="block px-4 py-2 hover:bg-gray-200">Banjir</a></li>
                            <li><a href="{{ url('kebakaran') }}" class="block px-4 py-2 hover:bg-gray-200">Kebakaran</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ url('berita') }}" class="block px-4 py-2 hover:bg-gray-200">Berita</a></li>
                    <li><a href="{{ url('about') }}" class="block px-4 py-2 hover:bg-gray-200">About Us</a></li>
                    <li><a href="{{ url('contact') }}" class="block px-4 py-2 hover:bg-gray-200">Contact Us</a></li>
                    <hr class="mt-4 mb-4 text-gray-200">
                    @auth
                    <li>
    @if (isset($hasAbsen) && !$hasAbsen)
    <form id="absenFormNavbar" action="{{ route('absen.store') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <li>
        <a class="block px-4 py-2 hover:text-teal-600 cursor-pointer" type="button" aria-label="Absen Hari Ini" onclick="document.getElementById('absenFormNavbar').submit();">
            <!--<i class="fa-regular fa-calendar-check"></i>-->
            Absen
        </a>
    </li>
@endif
                    </li>
                    
                    <li>
                    @if(isset($hasPretest) && !$hasPretest)
    <a href="{{ route('pretest.index') }}" class="block w-full text-left px-4 py-2 hover:text-teal-600">Pre test</a>
@endif
</li>
                    
                    
                    <li>
    @if(isset($hasPosttest) && !$hasPosttest)
    <a href="{{ route('posttest.index') }}" class="block w-full text-left px-4 py-2 hover:text-teal-600">Post test</a>
    @endif
</li>
                    
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
                                <!--<i class="fa-solid fa-arrow-right-from-bracket"></i> -->
                                Logout
                            </button>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="absolute top-4 right-4">
            <button id="close-sidebar" class="text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;
    
            const sidebarLinks = document.querySelectorAll('#sidebar-menu a');
    
            sidebarLinks.forEach(function(link) {
                if (link.href === currentUrl) {
                    link.classList.add('text-teal-600');
                }
            });
    
            
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;
    
            const sidebarLinks = document.querySelectorAll('#nav-menu a');
    
            sidebarLinks.forEach(function(link) {
                if (link.href === currentUrl) {
                    link.classList.add('text-teal-600');
                }
            });
    
            
        });
    </script>
    

<script>
    document.getElementById('bencana-menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('bencana-menu');
        var icon = document.getElementById('bencana-menu-icon');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            menu.classList.add('hidden');
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    });
</script>
</header>

<style>
    /* Untuk Tailwind CSS */
    #sidebar-menu {
        @apply fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out;
    }

    #sidebar-menu .absolute {
        @apply top-4 right-4 z-50;
        /* Pastikan tombol memiliki z-index tinggi */
    }

    #sidebar-menu.show {
        @apply translate-x-0;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleMenu = document.getElementById('toggle-menu');
        const sidebarMenu = document.getElementById('sidebar-menu');
        const closeSidebar = document.getElementById('close-sidebar');

        toggleMenu.addEventListener('click', function() {
            sidebarMenu.classList.toggle('translate-x-full');
        });

        closeSidebar.addEventListener('click', function() {
            sidebarMenu.classList.add('translate-x-full');
        });

        document.addEventListener('click', function(event) {
            if (!sidebarMenu.contains(event.target) && !toggleMenu.contains(event.target)) {
                sidebarMenu.classList.add('translate-x-full');
            }
        });
    });
</script>




