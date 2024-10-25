<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
</head>

<body>
    <div class="container">
        <div class="image-container">

            <img src="{{ asset('assets/images/study.jpg') }}" alt="eror">
            <img src="https://mahasiswa.pcr.ac.id/assets/media/logos/logo-v.png" alt="eror">
        </div>
        <h1>Selamat Datang di Halaman Kami</h1>
        <p>Temukan berbagai informasi dan layanan terbaik di sini.</p>
        <button>Pelajari Lebih Lanjut</button>
        <button>
            <a href="{{ route('login') }}" class="login-button" style="color: white; text-decoration: none;">Masuk</a>
        </button>
    </div>
</body>

</html>
