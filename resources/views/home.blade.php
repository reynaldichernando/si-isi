@extends('base')
<!-- styles css -->
<link href="/css/home_styles.css" rel="stylesheet">
@section('body')

<div class="row">
    <!-- Banner -->
    <div class="container">
        <img class="banner" src="assets/other/home_banner.jpg" alt="Langkah kecil menyelamatkan bumi" width="1000" height="300">
        <div class="center"><h1>Langkah Kecil Menyelamatkan Bumi</h1></div>
    </div>

    <!-- Pesan Sekarang dan Keunggulan -->
    <div class="card1">
        <br>
            <a href="{{ url('/home-call') }}"><button class="button button5">PESAN SEKARANG</button></a>
        <br><br>

        <div class="center1">
            <h3>KEUNGGULAN</h3>
            <ul class="a">
                <li><h6>Mobile Refill Station</h6><p>Kurangi polusi plastik sekali pakai dengan mengisi ulang produk rumah tangga dan perawatan pribadi Anda di Mobile Refill Station kami.</p></li>
                <li><h6>Schedule A House Call</h6><p>Kami membawa isi ulang ke pintu Anda! Jadwalkan panggilan ke rumah tanpa kontak untuk isi ulang sesuai keinginan Anda.</p></li>
            </ul>




        </div>
    </div>

    <!-- Cara Isi Ulang -->
    <div class="container">
        <br><br><br><br>
        <h3 class="judul">CARA ISI ULANG</h3>
        <div class="clearfix">
            <div class="box">
                <img src="assets/other/refill.jpg" alt="Bawa kontainer bersih dan kering, lalu timbang" width="170" height="170">
                <h4>Bawa kontainer bersih dan kering, lalu timbang</h4>
            </div>
            <div class="box">
                <img src="assets/other/refill.jpg" alt="Lakukan pengisian sebanyak yang Anda mau" width="170" height="170">
                <h4>Lakukan pengisian sebanyak yang Anda mau</h4>
            </div>
            <div class="box">
                <img src="assets/other/refill.jpg" alt="Timbang kembali lalu bayar" width="170" height="170">
                <h4>Timbang kembali, lalu lakukan pembayaran</h4>
            </div>
        </div>
    </div>
</div>



@endsection
