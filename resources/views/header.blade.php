
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
    <a href="{{ url('/') }}"><img src="assets/other/logo.png" alt="HOMO TAK ADA" width="70" height="40"></a>
  </h5>
  
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{ url('/') }}">SI ISI</a>
    
    @if ($auth)
        @if ($role == 'admin')
            <a href="{{ url('/add-shoe') }}">Add Shoe</a>
        @endif

        @if($role == 'guest')
            <a class="p-2 text-dark" href="#">PANGGILAN RUMAH</a>
            <a class="p-2 text-dark" href="#">PRODUK</a>
        @endif
    @endif

  </nav>

  <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
</div>