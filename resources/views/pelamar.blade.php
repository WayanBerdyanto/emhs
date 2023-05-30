@extends('layouts/main')
@section('title', 'Pelamar')
@section('article')
    <div class="card">
        <div class="card-header text-center">
            <a href="pelamar/formtambahpelamar" class="btn btn-primary float-left">Tambah Data</a>
            <span>
                <form action="/pelamar/find" class="form-inline my-2 my-lg-0 float-right" method="GET">
                    <input name="key" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </span>
        </div>
        <div class="card-body">
            @if (session('flash_insert'))
                <div class="alert alert-success fade show" role="alert">
                    <strong>
                        {{ session('flash_insert') }}
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('flash_edit'))
                <div class="alert alert-primary fade show" role="alert">
                    <strong>
                        {{ session('flash_edit') }}
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('flash_delete'))
                <div class="alert alert-danger fade show" role="alert">
                    <strong>
                        {{ session('flash_delete') }}
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <ul class="list-group">
                @foreach ($pelamar as $data)
                    <li class="list-group-item">
                        <span class="font-weight-bold">{{ $data->nama }}</span class="font-weight-bold">
                        <div class="float-right">
                            <a href="/pelamar/detailpelamar/{{ $data->id }}" class="btn btn-primary">Detail</a>
                            <a href="/pelamar/formeditpelamar/{{ $data->id }}" class="btn btn-success">Edit</a>
                            <a href="/pelamar/deletepelamar/{{ $data->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Nama {{ $data->nama }} ?')">
                                Delete
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <span class="float-right mr-2 mt-1">{{ $pelamar->links() }}</span>
        </div>
        <div class="alert alert-success ml-4 mr-4" role="alert">
            Total Data Yang Suskses Ditampilkan : {{ $pelamar->count() }}
        </div>
    </div>

@endsection
