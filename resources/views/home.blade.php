@extends('base')
<!-- styles css -->
<link href="{{ asset('css/home_styles.css') }}" rel="stylesheet">
@section('body')

<!-- Banner -->
<div class="container">
    <img class="banner" src="assets/other/home_banner.jpg" alt="Langkah kecil menyelamatkan bumi" width="1000" height="300">
    <div class="center"><h1>Langkah Kecil Menyelamatkan Bumi</h1></div>
</div>

<!-- Pesan Sekarang dan Keunggulan -->
<div class="card1">
    <br><br>
    <button class="button button5">PESAN SEKARANG</button>
    <br><br>
    
    <div class="center1">
        <h3>KEUNGGULAN</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>

<!-- Cara Isi Ulang -->
<br><br><br><br>
<h3 class="judul">CARA ISI ULANG</h3>
<div class="clearfix">
    <div class="box">
        <img src="assets/other/refill.jpg" alt="Bawa kontainer bersih dan kering, lalu timbang" height="100%" width="100%">
        <h4>Bawa kontainer bersih dan kering, lalu timbang</h4>
    </div>
    <div class="box">
        <img src="assets/other/refill.jpg" alt="Lakukan pengisian sebanyak yang Anda mau" height="100%" width="100%">
        <h4>Lakukan pengisian sebanyak yang Anda mau</h4>
    </div>
    <div class="box">
        <img src="assets/other/refill.jpg" alt="Timbang kembali lalu bayar" height="100%" width="100%">
        <h4>Timbang kembali lalu bayar</h4>
    </div>
</div>


@endsection