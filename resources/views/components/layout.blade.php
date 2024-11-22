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
    </style>

    

    

  </head>
  <body>
   

    <x-navbar/>


    


{{ $slot }}




{{-- <!-- Modal -->
<div class="modal fade" id="pretestNotification" tabindex="-1" aria-labelledby="pretestNotificationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="pretestNotificationLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ session('success') }}
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<style>
  /* Menghapus border pada header dan footer modal */
.modal-header, .modal-footer {
    border: none;
}

/* Mengubah background modal */
.modal-content {
    background-color: #f8f9fa; /* Warna latar belakang yang lebih lembut */
    border-radius: 8px; /* Membuat sudut modal lebih membulat */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan lembut */
}

/* Mengatur ukuran tombol tutup (close) */
.btn-close {
    font-size: 1.2rem;
    opacity: 0.8; /* Mengatur transparansi tombol tutup */
}

/* Mengatur tampilan tombol modal */
.btn-secondary {
    background-color: #6c757d; /* Warna tombol tutup */
    border-color: #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268; /* Warna tombol saat hover */
    border-color: #545b62;
}

/* Menambahkan padding pada body modal */
.modal-body {
    padding: 20px;
}

</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    @if(session('success'))
      var myModal = new bootstrap.Modal(document.getElementById('pretestNotification'), {
        keyboard: false
      });
      myModal.show();
    @endif
  });
</script> --}}














@include('sweetalert::alert')


{{-- @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}






<x-footer/>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->




  </html>