<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
        <link rel="icon" href="{{ asset('gambar/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">-->

<!-- Bootstrap CSS -->
<!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">-->

<!-- Bootstrap JS -->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>-->

    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

       {{-- CSS Animasi Toast --}}
<style>
@keyframes slideIn { from { transform: translateX(120%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
@keyframes fadeOut { from { opacity: 1; transform: translateX(0); } to { opacity: 0; transform: translateX(120%); } }
.animate-slide-in { animation: slideIn 0.3s ease-out forwards; }
.animate-fade-out { animation: fadeOut 0.3s ease-in forwards; }
    </style>

    

    

  </head>
  <body>
   

    <x-navbar/>


   {{-- Leaderboard fixed position (tidak perlu container) --}}
@unless(Request::is('login') || Request::is('register') || Request::is('password/*'))
    @auth
        <x-weekly-leaderboard />
    @endauth
@endunless


{{-- Toast Container (Hanya 1x di seluruh app) --}}
@if(session('success') || session('error') || $errors->any())
<div id="toast-wrapper" class="fixed top-4 right-4 z-[100] space-y-2 pointer-events-none">
    @if(session('success'))
    <div class="toast-item flex items-center gap-3 px-4 py-3 bg-green-50 border border-green-200 text-green-800 rounded-xl shadow-lg pointer-events-auto animate-slide-in">
        <i class="fas fa-check-circle text-green-500"></i>
        <span class="text-sm font-medium">{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="ml-2 text-green-400 hover:text-green-600"><i class="fas fa-times text-xs"></i></button>
    </div>
    @endif

    @if(session('error'))
    <div class="toast-item flex items-center gap-3 px-4 py-3 bg-red-50 border border-red-200 text-red-800 rounded-xl shadow-lg pointer-events-auto animate-slide-in">
        <i class="fas fa-exclamation-circle text-red-500"></i>
        <span class="text-sm font-medium">{{ session('error') }}</span>
        <button onclick="this.parentElement.remove()" class="ml-2 text-red-400 hover:text-red-600"><i class="fas fa-times text-xs"></i></button>
    </div>
    @endif

    @if($errors->any())
    <div class="toast-item flex items-center gap-3 px-4 py-3 bg-amber-50 border border-amber-200 text-amber-800 rounded-xl shadow-lg pointer-events-auto animate-slide-in">
        <i class="fas fa-exclamation-triangle text-amber-500"></i>
        <span class="text-sm font-medium">{{ $errors->first() }}</span>
        <button onclick="this.parentElement.remove()" class="ml-2 text-amber-400 hover:text-amber-600"><i class="fas fa-times text-xs"></i></button>
    </div>
    @endif
</div>
@endif


{{ $slot }}







@include('sweetalert::alert')







  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->


  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.toast-item');
    toasts.forEach(t => {
        setTimeout(() => {
            t.classList.add('animate-fade-out');
            setTimeout(() => t.remove(), 300);
        }, 2000);
    });
});
</script>


  </html>