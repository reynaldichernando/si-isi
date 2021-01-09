@extends('base')

<link href="{{ asset('css/view_transaction_styles.css') }}" rel="stylesheet">
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="pb-2 mt-4 mb-2 border-bottom"><h1>{{$product->name}}</h1></div>
        </div>
        <img src="{{$product->image}}" alt="ini gambar"> 
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