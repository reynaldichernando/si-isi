@extends('base')
<link href="{{ asset('css/add_edit_product_styles.css') }}" rel="stylesheet">
@section('body')
    <div class="col-sm-12">
        <div class="page-header"><h1>View Transaction</h1></div>
    </div>
    @foreach ($transactions as $item)
    <div>
        Name: {{$item->name}} <br>
        Region: {{$item->region}} <br>
        Address: {{$item->address}} <br>
        Date: {{$item->date}} <br>
        Time: {{$item->time}} <br>
        Phone: {{$item->phone}} <br>
        Email: {{$item->email}} <br>
        Payment: {{$item->payment}} <br>
    </div>
    <br>
    @endforeach
@endsection