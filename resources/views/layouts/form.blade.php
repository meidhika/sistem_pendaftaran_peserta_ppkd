<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Peserta PPKD Jakarta Pusat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="icon" href="{{ asset('img/PPKDJP.png') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('form/form-pendaftaran.css') }}">

</head>

<body>
    @include('sweetalert::alert')
    <!-- partial:index.partial.html -->
    <div class="row justify-content-center align-items-center  mb-0">
        <div class="col-sm-1 mt-5">

            <img src="{{ asset('img/PPKDJP.png') }}" alt="" width="200px" class="mb-5">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-3 text-center">
            <h1 class="fs-2 my-3">Pusat Pelatihan Kerja Daerah Jakarta Pusat</h1>
            <p>Jl. Karet Pasar Baru Barat, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus
                Ibukota Jakarta</p>
        </div>

    </div>
    <div class="demo-page">

        @if (!Route::is('formulir.index'))
            @include('layouts.incform.sidebar')
        @endif
        <main class="demo-page-content">
            @yield('content')
        </main>
    </div>
    <!-- partial -->


    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
