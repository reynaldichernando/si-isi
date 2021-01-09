
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
    <a href="{{ url('/') }}"><img src="assets/other/logo.png" alt="UDAH" width="70" height="40"></a>
  </h5>
  
  <nav class="my-2 my-md-0 mr-md-3">
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

  <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
</div>