@extends('base')
<!-- styles css -->
<link href="{{ asset('css/product_list_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">Daftar Produk</h1></div>
    </div>
    <div class="col-sm-12" id="add-button">
        <a href="/add-product" class="btn btn-outline-dark">Tambah Produk</a>
    </div>
    <ul class="list-group col-sm-12">
        @foreach ($products as $index => $product)
        <li class="list-group-item">
            <table class="table table-borderless table-condensed">
                <tr>
                    <td id="table-number">{{ $index +1 }}</td>
                    <th scope="row" id="table-header"><a href="/detail-product={{ $product->id }}">{{ $product->name }}</a> </th>
                    <td id="delete-button"><a href="/detail-product={{ $product->id }}">Detail</a></td>
                    <td id="edit-button"><a href="/edit-product={{ $product->id }}">Ubah</a></td>
                    <td id="delete-button"><a href="/delete-product={{ $product->id }}">Hapus</a></td>
                </tr>
            </table>
        </li>
        @endforeach
    </ul>
</div>
@endsection