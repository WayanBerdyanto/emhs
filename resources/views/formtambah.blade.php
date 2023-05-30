@extends('layouts/main')
@section('title', 'Product')
@section('article')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Form Tambah Product</h3>
        </div>
        <div class="card-body">
            <form action="/product/simpanData" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kodeProduk">Kode Produk</label>
                    <input type="text" maxlength="4" name="kodeProduk" id="kodeProduk" class="form-control"
                        placeholder="Kode Produk">
                </div>
                <div class="form-group">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="nama Produk">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Post Photo</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label for="jumlahProduk">jumlah Produk</label>
                    <input type="number" name="jumlahProduk" id="jumlahProduk" class="form-control" placeholder="jumlahProduk">
                </div>
                <button type="submit" class="btn btn-outline-primary float-right">
                    <i class="bi bi-save"></i>
                    Simpan</button>
            </form>
        </div>
    </div>

@endsection
