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
    			}
    			return view('hasil_kode',compact('barang','object'));
    		}
    	}
    }
}
