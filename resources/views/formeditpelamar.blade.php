@extends('layouts/main')
@section('title', 'Product')
@section('article')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Form Edit Pelamar</h3>
        </div>
        <div class="card-body">
            @php
                $bidang_keahlian = explode(',', $pelamar->bidang_keahlian);
            @endphp
            <form action="/pelamar/simpaneditpelamar/{{ $pelamar->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nik">Nik</label>
                    <input type="number"name="nik" id="nik" class="form-control" placeholder="Masukan Nik"
                        value="{{ $pelamar->nik }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama"
                        value="{{ $pelamar->nama }}">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="form-check">
                        <input type="radio" id="laki" name="gender" class="form-check-input" value="laki-laki"
                            {{ $pelamar->gender == 'laki-laki' ? 'checked' : '' }}>
                        <label for="laki" class="mr-4">Laki-Laki</label>

                        <input type="radio" id="perempuan" name="gender" class="form-check-input" value="perempuan"
                            {{ $pelamar->gender == 'perempuan' ? 'checked' : '' }}>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pendidikan">Tingkat Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="tingkat_pendidikan">
                        <option value="S1 Sistem Informasi"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Sistem Informasi' ? 'selected' : '' }}>S1 Sistem
                            Informasi
                        </option>
                        <option value="S1 Kedokteran"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Kedokteran' ? 'selected' : '' }}>S1
                            Kedokteran</option>
                        <option value="S1 Informatika"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Informatika' ? 'selected' : '' }}>
                            S1 Informatika</option>
                        <option value="S1 Arsitektur"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Arsitektur' ? 'selected' : '' }}>S1
                            Arsitektur</option>
                        <option value="S1 Desain Produk"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Desain Produk' ? 'selected' : '' }}>S1 Desain Produk
                        </option>
                        <option value="S1 Manajemen"
                            {{ $pelamar->tingkat_pendidikan == 'S1 Manajemen' ? 'selected' : '' }}>S1
                            Manajemen</option>
                        <option value="SMA/SMK" {{ $pelamar->tingkat_pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bidang Keahlian</label>
                    <div class="form-check">
                        <input type="checkbox" name="bidang_keahlian[]" id="FrontEnd Development" class="form-check-input"
                            value="FrontEnd Development"
                            {{ in_array('FrontEnd Development', $bidang_keahlian) ? 'checked' : '' }}>
                        <label for="FrontEnd Development" class="mr-4">FrontEnd Development</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bidang_keahlian[]" id="BackEnd Development" class="form-check-input"
                            value="BackEnd Development"
                            {{ in_array('BackEnd Development', $bidang_keahlian) ? 'checked' : '' }}>
                        <label for="BackEnd Development" class="mr-4">BackEnd Development</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bidang_keahlian[]" id="Fullstack Development" class="form-check-input"
                            value="Fullstack Development"
                            {{ in_array('Fullstack Development', $bidang_keahlian) ? 'checked' : '' }}>
                        <label for="Fullstack Development" class="mr-4">Fullstack Development</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bidang_keahlian[]" id="Mobile Development" class="form-check-input"
                            value="Mobile Development"
                            {{ in_array('Mobile Development', $bidang_keahlian) ? 'checked' : '' }}>
                        <label for="Mobile Development" class="mr-4">Mobile Development</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bidang_keahlian[]" id="Mechine Learning" class="form-check-input"
                            value="Mechine Learning" {{ in_array('Mechine Learning', $bidang_keahlian) ? 'checked' : '' }}>
                        <label for="Mechine Learning" class="mr-4">Mechine Learning</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">
                    <i class="bi bi-save"></i>
                    Simpan</button>
            </form>
        </div>
    </div>

@endsection
