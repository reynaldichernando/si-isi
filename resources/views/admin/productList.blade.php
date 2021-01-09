@extends('base')
<!-- styles css -->
<link href="{{ asset('css/product_list_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1>Daftar Produk</h1></div>
    </div>
    <ul class="list-group col-sm-12">
        @foreach ($products as $index => $product)
        <li class="list-group-item">
            <table class="table table-borderless table-condensed">
                <tr>
                    <td id="table-number">{{ $index +1 }}</td>
                    <th scope="row" id="table-header"><a href="/detail-product={{ $product->id }}">{{ $product->name }}</a> </th>
                    <td id="delete-button"><a href="/detail-product={{ $product->id }}">Detail</a></td>
                    <td id="edit-button"><a href="/edit-product={{ $product->id }}">Edit</a></td>
                    <td id="delete-button"><a href="/delete-product={{ $product->id }}">Hapus</a></td>
                </tr>
            </table>
        </li>
        @endforeach
    </ul>
    <form action="/add-product">
        <div id="submit-btn"><button class="btn btn-success" type="submit">Add Product</button></div>
    </form>
</div>
@endsection