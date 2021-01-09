@extends('base')
<link href="{{ asset('css/home_call_styles.css') }}" rel="stylesheet">
@section('body')
<div class="row">
    <!-- header name -->
    <div class="col-sm-12">
        <div class="pb-2 mt-4 mb-2 border-bottom"><h1 id="page-header">Panggilan Rumah</h1></div>
    </div>
    <div class="col-sm-2"></div>
    <form action="{{ route('confirm_call') }}" method="POST" enctype="multipart/form-data" class="col-sm-8">
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
        <!-- caller name -->
        <div class="form-group mt-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan nama anda..." id="name">
        </div>
        <!-- caller region  -->
        <div class="form-group mt-3">
            <label for="region">Kecamatan</label>
            <select name="region" id="region" class="custom-select">
                <option value="Cakung"> Cakung </option>
                <option value="Cempaka Putih"> Cempaka Putih </option>
                <option value="Cengkareng"> Cengkareng </option>
                <option value="Cilandak"> Cilandak </option>
                <option value="Cilincing"> Cilincing </option>
                <option value="Cipayung"> Cipayung </option>
                <option value="Ciracas"> Ciracas </option>
                <option value="Duren Sawit"> Duren Sawit </option>
                <option value="Gambir"> Gambir </option>
                <option value="Grogol Petamburan"> Grogol Petamburan </option>
                <option value="Jagakarsa"> Jagakarsa </option>
                <option value="Jatinegara"> Jatinegara </option>
                <option value="Johar Baru"> Johar Baru </option>
                <option value="Kali Deres"> Kali Deres </option>
                <option value="Kebayoran Baru"> Kebayoran Baru </option>
                <option value="Kebayoran Lama"> Kebayoran Lama </option>
                <option value="Kebun Jeruk"> Kebun Jeruk </option>
                <option value="Kelapa Gading"> Kelapa Gading </option>
                <option value="Kemayoran"> Kemayoran </option>
                <option value="Kembangan"> Kembangan </option>
                <option value="Kep. Seribu Selatan"> Kep. Seribu Selatan </option>
                <option value="Kep. Seribu Utara"> Kep. Seribu Utara </option>
                <option value="Koja"> Koja </option>
                <option value="Kramat Jati"> Kramat Jati </option>
                <option value="Makasar"> Makasar </option>
                <option value="Mampang Prapatan"> Mampang Prapatan </option>
                <option value="Matraman"> Matraman </option>
                <option value="Menteng"> Menteng </option>
                <option value="Pademangan"> Pademangan </option>
                <option value="Palmerah"> Palmerah </option>
                <option value="Pancoran"> Pancoran </option>
                <option value="Pasar Minggu"> Pasar Minggu </option>
                <option value="Pasar Rebo"> Pasar Rebo </option>
                <option value="Penjaringan"> Penjaringan </option>
                <option value="Pesanggrahan"> Pesanggrahan </option>
                <option value="Pulo Gadung"> Pulo Gadung </option>
                <option value="Sawah Besar"> Sawah Besar </option>
                <option value="Senen"> Senen </option>
                <option value="Setiabudi"> Setiabudi </option>
                <option value="Taman Sari"> Taman Sari </option>
                <option value="Tambora"> Tambora </option>
                <option value="Tanah Abang"> Tanah Abang </option>
                <option value="Tanjung Priok"> Tanjung Priok </option>
                <option value="Tebet"> Tebet </option>
            </select>
        </div>
        <!-- caller address -->
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" name="address" placeholder="Masukkan alamat anda..." id="address">
            <small id="addressHelp" class="form-text text-muted">Alamat yang dimasukkan merupakan nama jalan sampai no rumah.</small>
        </div>
        <!-- caller date -->
        <div class="form-group">
            <label for="date">Tanggal Panggilan</label>
            <input type="date" class="form-control" name="address" id="address">
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
            <input type="text" class="form-control" name="phone" placeholder="Masukkan nomor telepon anda..." id="phone">
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
                <option value="Go Pay">GoPay</option>
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
                        <h4 class="modal-title">Something</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <!-- available products -->
                        <h5>Produk Tersedia</h3>
                        <ul class="list-group">
                            @foreach ($products as $product)
                                <li class="list-group-item">{{ $product->name }}</li>
                            @endforeach
                        </ul>
                        <h5>Harga Pemesanan</h5>
                        <!-- <h5>Cara Pembayaran <span>{{ \Request::get('payment') }}</span></h5> -->
                        <h5>Cara Pembayaran</h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-dark" type="submit">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-sm-2"></div>
</div>
@endsection