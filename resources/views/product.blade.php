@extends('layouts/main')
@section('title', 'Product')
@section('article')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="/product/formtambah" class="btn btn-outline-primary">
                    <i class="bi bi-plus-square"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                @foreach ( $product as $idx => $data)
                    <div class="row border-top border-bottom py-3">
                        <div class="col-lg-2 mt-3">
                            <img src="{{ asset('images/'. $data->photo) }}" alt="Keyboard gaming" width="130px" height="110px">
                        </div>
                        <div class="col-lg-8 mt-2">
                            <h5>{{ $data->namaProduk }}</h5>
                            <p>{{ $data->deskripsi }}</p>
                        </div>
                        <div class="col-lg-2 mt-2 float-right">
                            <div class="btn-group-vertical float-right mt-3 mb-3 text-light">
                                <a class="btn btn-primary" href="/product/detailproduct/{{ $data->id }}">
                                    Detail
                                    <i class="bi bi-journal-text"></i>
                                </a>
                                <a class="btn btn-success">
                                    Edit
                                    <i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger">
                                    Delete
                                    <i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
