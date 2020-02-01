<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index () {
		// return view('dashboard');//mengembalikan view
		// $user = User ::where("email", "foorbal2gmai.com")->first(); menampilkan data /mencari
		// $user = User ::findorfail(2); menampilkan data /mencari jika tidak ada eror
		// $user = User ::find(2); //menampilkan data /mencari
		// $user = User ::select("nama"); //  nama dan email aja
		 // $user = User ::all(); untuk semua data

// mengambil data dari table pegawai
    	$user = DB::table('tbl_user')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['tbl_user' => $user]);
		// return response()->json($user);
    }
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('tbl_user')->insert([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'email' => $request->email,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
 
	}
 
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$user = DB::table('tbl_user')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['tbl_user' => $user]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('tbl_user')->where('id',$request->id)->update([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'email' => $request->email,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('tbl_user')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
	}

	public function detail($id)
	{
		$user = DB::table('tbl_user')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('detail',['tbl_user' => $user]);
	}
}
