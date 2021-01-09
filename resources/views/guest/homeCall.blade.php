@extends('base')

<link href="{{ asset('css/add_edit_product_styles.css') }}" rel="stylesheet">
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
            <label for="category">Kecamatan</label>
            <select name="region" id="region" class="form-control">
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
            <label for="price">Alamat</label>
            <input type="text" class="form-control" name="price" placeholder="Masukkan alamat anda..." id="address">
        </div>
        <!-- caller date -->
        <div class="form-group">
            <label for="stock">Tanggal Panggilan</label>
            <input type="date" class="form-control">
        </div>
        <!-- caller time -->
        <div class="form-group">
            <label for="description">Deskripsi Produk</label>
            <input type="text" class="form-control" name="description" placeholder="Masukkan deskripsi produk di sini..." id="description">
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