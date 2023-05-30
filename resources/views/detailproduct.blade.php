@extends('layouts/main')
@section('title', 'Product')
@section('article')
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Photo</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $idx=> $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <td>{{ $data->kodeProduk }}</td>
                    <td>{{ $data->namaProduk }}</td>
                    <td>
                        <img src="{{ asset('images/' . $data->photo)}}" alt="Gambar Error" height="40px" width="40px">
                    </td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->jumlahProduk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
