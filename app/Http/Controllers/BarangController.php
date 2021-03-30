<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index()
    {
        $barang=Barang::orderBy('id_barang','asc')->paginate(5);
        return view('index',compact('barang'));
    }

    public function cari(Request $request)
    {
    	$object = $request->cari;
    	$barang='';
    	$katgori = Barang::where('kategori_barang',$object)->get();
    	if(!$katgori->isEmpty())
    	{
    		$barang = $katgori;
    		return view('hasil',compact('barang','object'));
    	}else
    	{
    		$nama = Barang::where('nama_barang',$object)->first();
    		if($nama)
    		{
    			$barang = $nama;
    			return view('hasil_nama',compact('barang','object'));
    		}else
    		{
    			$kode = Barang::where('kode_barang',$object)->first();
    			if($kode)
    			{
    				$barang = $kode;
    				return view('hasil_kode',compact('barang','object'));
    			}else
    			{
    				return 'barang '.$object.' yang anda cari tidak ada! <a class="btn btn-success mt-3" href="'.url('/').'">Home</a>';
    			}
    		}
    	}
    }

    public function create()
    {
    	return view('create');
    }

    public function tambah(Request $request)
    {
    	 $request->validate(
    	 [
    	 'nama_barang'=>'required'
        ,'kode_barang'=>'required'
        ,'qty'=>'required'
        ,'harga'=>'required'
        ,'kategori_barang'=>'required'
        ]);//fungsieloquentuntukmenambahdata
        Barang::create($request->all());
        return redirect('barang');
    }

    public function update(Request $request,$id)
    {
    	 $request->validate(
    	 [
    	 'nama_barang'=>'required'
        ,'kode_barang'=>'required'
        ,'qty'=>'required'
        ,'harga'=>'required'
        ,'kategori_barang'=>'required'
        ]);//fungsieloquentuntukmenambahdata
          Barang::find($id)->update($request->all());
        return redirect('barang');
    }

    public function show($id)
    {
    	$data = Barang::find($id);
    	return view('show',compact('data'));
    }

    public function edit($id)
    {
    	$data = Barang::find($id);
    	return view('edit',compact('data'));
    }

    public function delete($id)
    {
    	 Barang::find($id)->delete();
    	 return redirect('barang'); 
    }
}
