@extends('base')
<!-- styles css -->
<link href="{{ asset('css/add_edit_product_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <!-- header name -->
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">Ubah Produk</h1></div>
    </div>
    <div class="col-sm-2"></div>
    <form action="{{ route('edit_product', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data" class="col-sm-8">
        @csrf
        <!-- error message -->
        @if(count($errors) > 0)
            <div class="alert alert-danger col-sm-12" role="alert">
                Something is wrong:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- product name -->
        <div class="form-group mt-3">
            <label for="name">Nama Produk</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan nama produk di sini..."
                id="name" value="{{ $product->name }}">
        </div>
        <!-- product category -->
        <div class="form-group mt-3">
            <label for="category">Kategori Produk</label>
            <select class="custom-select" name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"
                        @if ($product->category_id == $category->id)
                            selected
                        @endif
                        >{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <!-- product price -->
        <div class="form-group">
            <label for="price">Harga Produk</label>
            <input type="text" class="form-control" name="price" placeholder="Masukkan harga produk di sini..."
                id="price" value="{{ $product->price }}">
            <small id="priceHelp" class="form-text text-muted">Harga yang dimasukkan merupakan harga per 100ml.</small>
        </div>
        <!-- product stock -->
        <div class="form-group">
            <label for="stock">Stok Produk</label>
            <input type="text" class="form-control" name="stock" placeholder="Masukkan jumlah stok produk di sini..."
                id="stock" value="{{ $product->stock }}">
        </div>
        <!-- product decription -->
        <div class="form-group">
            <label for="description">Deskripsi Produk</label>
            <input type="text" class="form-control" name="description" placeholder="Masukkan deskripsi produk di sini..."
                id="description" value="{{ $product->description }}">
        </div>
        <!-- shoe image -->
        <div class="form-group">
            <label for="image">Gambar Produk</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <div id="submit-btn"><button class="btn btn-success btn-block" type="submit">Submit</button></div>
    </form>
    <div class="col-sm-2"></div>
</div>
@endsection
