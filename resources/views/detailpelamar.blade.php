@extends('layouts/main')
@section('title', 'Product')
@section('article')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $pelamar->nama }}</h3>
            <p class="card-subtitle mb-3 text-muted">{{ $pelamar->nik }}</p>
            <p class="card-text">{{ $pelamar->gender }}</p>
            <p class="card-text">{{ $pelamar->tingkat_pendidikan }}</p>
            <p class="card-text">{{ $pelamar->bidang_keahlian }}</p>
            <a href="/pelamar" class="color-primary">Kembali</a>
        </div>
    </div>
@endsection
