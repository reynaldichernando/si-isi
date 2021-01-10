@extends('base')
    <!-- styles css -->
    <link href="{{ asset('css/view_transaction_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">Pesanan</h1></div>
    </div>
    <div class="col-sm-12">
        <ul class="list-group">
            @foreach ($transactions as $item)
            <li class="list-group-item">
                <table class="table table-borderless table-condensed">
                    <thead>
                        <tr>
                            <th scope="col" class="table-header">Pemesanan dibuat pada {{ $item->created_at }}</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="table-header">Nama</th>
                            <td>{{ $item->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-header">Lokasi</th>
                            <td>{{ $item->address }}, {{ $item->region->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-header">Waktu</th>
                            <td>{{ $item->time }}, {{ $item->date }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-header">No. HP</th>
                            <td>{{ $item->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-header">Email</th>
                            <td>{{ $item->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-header">Cara Pembayaran</th>
                            <td>{{ $item->payment }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-sm-12" id="add-button">
                    <a href="/finish-transaction={{$item->id}}" class="btn btn-outline-dark" style="color: aliceblue;">Selsaikan Pemesanan</a>
                </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection