<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuesioner Pengetahuan dan tanya Bencana</title>
            <link rel="icon" href="{{ asset('gambar/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center py-6 px-6">
        <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-md">

    
    
    
    {{ $slot }}
    
    
    </div>
</body>

</html>




<style>
    input[type="radio"] {
        accent-color: #1d4ed8;
        /* Ubah ke warna biru yang diinginkan */
    }
</style>