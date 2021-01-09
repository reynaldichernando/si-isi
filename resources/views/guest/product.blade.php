@extends('base')
<!-- styles css -->
<link href="{{ asset('css/product_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <!-- header name -->
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">Produk</h1></div>
    </div>
    <!-- paginate searching -->
    <form action="/" method="get" id="search-bar" class="col-sm-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari produk di sini..." name="search" value="{{ Request::input('search') }}">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" href="/">Search</button>
            </div>
        </div>
    </form>
    <!-- show products -->
    @foreach ($products as $product)
        <div class="col-sm-3 card">
            <div class="card-body">
                <a href="/detail-product={{ $product->id }}"><img src="{{ url('/') }}/assets/products/{{ $product->image }}" class="img-thumbnail" alt="No Image" id="product-img"></a>
            </div>
            <div class="card-footer">
                <div class="caption text-center">
                    <a href="/detail-product={{ $product->id }}">{{ $product->name }}</a>
                    <p>Rp. {{ number_format($product->price) }}/100ml</p>
                </div>
            </div>
        </div>
    @endforeach
    <!-- paginate pages -->
    <div class="col-sm-12" id="paging">{{ $products->withQueryString()->links() }}</div>
</div>
@endsection