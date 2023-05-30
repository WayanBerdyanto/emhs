<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Pelamar;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function account()
    {
        return view('account', ['key' => 'account']);
    }
    // Start Pelamar
    public function pelamar()
    {
        $pelamar = Pelamar::paginate(5);
        return view('pelamar', ['key' => 'pelamar', 'pelamar' => $pelamar]);
    }
    public function detailpelamar($id)
    {
        $pelamar = Pelamar::find($id);
        return view('detailpelamar', ['key' => 'pelamar'], ['pelamar' => $pelamar]);

    }
    public function formtambahpelamar(){
        return view('formtambahpelamar',['key' => 'pelamar']);
    }
    public function simpanpelamar(Request $request){
        $nik = $request->nik;
        $nama = $request->nama;
        $gender = $request->gender;
        $tingkat_pendidikan = $request->tingkat_pendidikan;
        $bidang_keahlian = implode(",",$request->get('bidang_keahlian'));
        Pelamar::create([
            'nik' => $nik,
            'nama' => $nama,
            'gender' => $gender,
            'tingkat_pendidikan' => $tingkat_pendidikan,
            'bidang_keahlian' => $bidang_keahlian
        ]);
        return redirect('pelamar')->with('flash_insert','Data dengan Nama ' . $nama . ' Berhasil Di simpan');
    }
    public function formeditpelamar($id){
        $pelamar = Pelamar::find($id);
        return view('formeditpelamar',['key'=>'pelamar', 'pelamar'=>$pelamar]);
    }
    public function simpaneditpelamar($id, Request $request){
        $pelamar = Pelamar::find($id); 
        $pelamar->nik = $request->nik;
        $pelamar->nama = $request->nama;
        $pelamar->gender = $request->gender;
        $pelamar->tingkat_pendidikan = $request->tingkat_pendidikan;
        $pelamar->bidang_keahlian = implode(',',$request->get('bidang_keahlian'));
        $pelamar->save();
        
        return redirect('/pelamar')->with('flash_edit', 'Data dengan Nama ' .$pelamar->nama. ' Berhasil Di Edit');
    }
    public function deletepelamar($id){
        $pelamar = Pelamar::find($id);
        $pelamar->delete();
        return redirect('/pelamar')->with('flash_delete', 'Data Dengan Nama ' .$pelamar->nama. ' Berhasil Dihapus');
    }
    // End Pelamar

    // START Product
    public function product()
    {
        $product = Product::get();
        return view('product', ['key' => 'product'], ['product' => $product]);
    }
    public function detailproduct($id)
    {
        $product = Product::get();
        return view('detailproduct', ['key' => 'product'], ['product' => $product]);
    }
    public function formtambah()
    {
        return view('formtambah', ['key' => 'product']);
    }
    public function simpanData(Request $request)
    {
        // return $request->file('photo')->store('post-photos');
        $kodeProduk = $request->kodeProduk;
        $namaProduk = $request->namaProduk;
        $deskripsi = $request->deskripsi;
        $harga = $request->harga;
        $jumlahProduk = $request->jumlahProduk;

        if ($request->hasFile('photo')) {
            $nm = $request->photo;
            $fileName = $nm->getClientOriginalName();
            $nm->move(public_path('images'), $fileName);
            Product::create([
                'kodeProduk' => $kodeProduk,
                'namaProduk' => $namaProduk,
                'photo' => $fileName,
                'deskripsi' => $deskripsi,
                'harga' => $harga,
                'jumlahProduk' => $jumlahProduk
            ]);
            return redirect('product');
        }
    }
    // Reporting
    public function reporting()
    {
        return view('reporting', ['key' => 'reporting']);
    }

}