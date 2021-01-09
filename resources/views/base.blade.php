<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- styles css -->
    <link href="{{ asset('css/base_styles.css') }}" rel="stylesheet">
    <title>Si Isi</title>
</head>
<body>
    <!-- navbar header -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">
            <a href="{{ url('/') }}"><img src="{{ url('/') }}/assets/other/logo.png" alt="no image" width="70" height="40"></a>
        </h5>
        
        <nav class="my-2 my-md-0 mr-md-3" id="header">
            <a class="p-2 text-dark" href="{{ url('/') }}">SI ISI</a>
            @if ($auth)
                <a class="p-2 text-dark" href="/product-list">DAFTAR PRODUK</a>
                <a class="p-2 text-dark" href="/view-transaction">PEMESANAN</a>
                <a class="p-2 text-dark" href="/logout">LOGOUT</a>
            @else
                <a class="p-2 text-dark" href="/home-call">PANGGILAN RUMAH</a>
                <a class="p-2 text-dark" href="/product-list">PRODUK</a>
            @endif
        </nav>
    </div>
    <div class="container">
        @yield('body')
    </div>
    <div id="footer">
        <a href="https://www.instagram.com/si.isi.id/"><img src="{{ url('/') }}/assets/other/instagram.png" alt="HOMO " width="40" height="40"></a>
    </div>
</body>
</html>