@extends('base')
<!-- styles css -->
<link href="{{ asset('css/detail_product_styles.css') }}" rel="stylesheet">
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">{{$product->name}}</h1></div>
        </div>
        <div class="col-sm-12">
            <img src="{{ url('/') }}/assets/products/{{ $product->image }}" alt="no image" class="img-thumbnail">
        </div>
        <table class="table table-borderless table-condensed">
            <tbody>
                <tr>
                    <th scope="row" class="table-header">Price per ml</th>
                    <td>{{$product->price}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-header">Stock</th>
                    <td>{{$product->stock}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-header">Deskripsi</th>
                    <td>{{$product->description}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-header">Kategori</th>
                    <td>{{$product->category->name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
