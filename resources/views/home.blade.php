@extends('base')
<!-- styles css -->
<link href="{{ asset('css/home_styles.css') }}" rel="stylesheet">
@section('body')

<div class="row">
    <div class="card1">
        <h1>Hello World!</h1>
    </div>
</div>
<div class="row">
    <div class="leftcolumn">
      <img src="assets/other/home_bg.jpg" alt="Bawa kontainer bersih dan kering, lalu timbang" height="100%" width="100%">
      <h3>Bawa kontainer bersih dan kering, lalu timbang</h3>
    </div>
    <div class="middlecolumn">
      <img src="assets/other/home_bg.jpg" alt="Lakukan pengisian sebanyak yang Anda mau" height="100%" width="100%">
      <h3>Lakukan pengisian sebanyak yang Anda mau</h3>
    </div>
    <div class="rightcolumn">
      <img src="assets/other/home_bg.jpg" alt="Timbang kembali lalu bayar" height="100%" width="100%">
      <h3>Timbang kembali lalu bayar</h3>
    </div>
</div>
@endsection