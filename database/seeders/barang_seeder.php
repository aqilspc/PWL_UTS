<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
class barang_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$barang1 = [
            'indomie','mie sedap','mie bihun','super mie','wilco mie'
        ];
        $barang2 = 
        [
        'tango','beng beng','malkist','nabati','wafer top'
        ];
        $barang3 = 
        [
        'bearbrand','poweat','teh pucuk','freas tea','indomilk'];
        $barang4 =
         [
        'promild','grendel','gudang baru','gudang garam','surya 12'];
    	$kategori = ['makanan','snack','minuman','rokok'
        ];
    	for ($i=0; $i < 5; $i++) { 
            $hg = $i+1;
    		 DB::table('barang')->insert(
	        	[
	        		'kode_barang'=>Str::random(7),
	        		'nama_barang'=>$barang1[$i],
	        		'kategori_barang'=>$kategori[0],
	        		'harga'=>$hg.'000',
	        		'qty'=>$i+2,
	        	]
	        );
    	}

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang2[$i],
                    'kategori_barang'=>$kategori[1],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang3[$i],
                    'kategori_barang'=>$kategori[2],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang4[$i],
                    'kategori_barang'=>$kategori[3],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }
    }
}
