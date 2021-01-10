@extends('base')
<link href="{{ asset('css/home_call_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <!-- header name -->
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom">
            <h1 id="page-header">Panggilan Rumah</h1>
        </div>
    </div>
    <div class="col-sm-2"></div>
    <form action="{{ route('confirm_call') }}" method="POST" enctype="multipart/form-data"
        class="col-sm-8">
        @csrf
        <!-- error message -->
        @if(count($errors) > 0)
            <div class="alert alert-danger col-sm-12" role="alert">
                Something is wrong:
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- caller name -->
        <div class="form-group mt-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan nama anda..." id="name">
        </div>
        <!-- caller region  -->
        <div class="form-group mt-3">
            <label for="region">Kecamatan</label>
            <select name="region" id="region" class="custom-select" onchange="">
                @foreach($regions as $region)
                    <option value="{{ $region->id }}"> {{ $region->name }} </option>
                @endforeach
            </select>
        </div>
        <!-- caller address -->
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" name="address" placeholder="Masukkan alamat anda..." id="address">
            <small id="addressHelp" class="form-text text-muted">Alamat yang dimasukkan merupakan nama jalan sampai no
                rumah.</small>
        </div>
        <!-- caller date -->
        <div class="form-group">
            <label for="date">Tanggal Panggilan</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
        <!-- caller time -->
        <div class="form-group">
            <label for="time">Waktu</label>
            <select name="time" id="time" class="custom-select">
                <option value="Pagi">Pagi</option>
                <option value="Siang">Siang</option>
                <option value="Malam">Malam</option>
            </select>
        </div>
        <!-- caller phone -->
        <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <input type="text" class="form-control" name="phone" placeholder="Masukkan nomor telepon anda..."
                id="phone">
        </div>
        <!-- caller email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan email anda..." id="email">
        </div>
        <!-- caller payment -->
        <div class="form-group">
            <label for="payment">Cara Pembayaran</label>
            <select name="payment" id="payment" class="custom-select">
                <option value="OVO">OVO</option>
                <option value="GoPay">GoPay</option>
                <option value="Dana">Dana</option>
            </select>
        </div>
        <!-- modal button -->
        <div id="order-btn">
            <button class="btn btn-success btn-block" type="button" data-toggle="modal"
                data-target="#confirmation">Pesan</button>
        </div>
        <!-- modal -->
        <div class="modal" id="confirmation">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pemesanan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <!-- available products -->
                        <h5>Produk Tersedia</h3>
                            <ul class="list-group">
                                @foreach($products as $product)
                                    <li class="list-group-item">{{ $product->name }}</li>
                                @endforeach
                            </ul>
                            <h5>Harga Pemesanan</h5>
                            <div class="form-group">
                                <label for="address">Price</label>
                                <div>Rp. <span id="regionPrice"></span></div>
                            </div>
                            <h5>Cara Pembayaran</h5>
                            <div id="payment-method">OVO</div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-dark" type="submit">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>


        $('#payment').change(function (event) {
            let value = $(event.target).val()
            $('#payment-method').text(value);
        })

        $('#region').change(function (event){
            $.ajax({
                url :'/getRegionPrice='+$('#region').val(),
                type: 'GET',
                success: function(response){
                    console.log(response);
                    $('#regionPrice').html(response.price);
                },
                error: function(response){
                    alert('Error loading region price');
                }
            })
        })

        $('#payment').trigger('change');
        $('#region').trigger('change');
    </script>
</div>
@endsection
