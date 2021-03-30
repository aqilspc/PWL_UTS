@extends('layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">Tambah Barang</div>
<div class="card-body">
<form method="post" action="{{url('tambah')}}" id="myForm">
@csrf
<div class="form-group">
	<label for="Nim">Nama Barang</label>
<input type="text"name="nama_barang"class="form-control"id="Nim"  aria-describedby="Nim"></div>
<div class="form-group">
<label for="Nama">Kode Barang</label>
<input type="text"name="kode_barang"class="form-control"id="Nama"aria-describedby="Nama">
</div>
<div class="form-group">
<label for="Kelas">Kategori Barang</label>
<input type="Kelas"name="kategori_barang"class="form-control"id="Kelas" aria-describedby="Kelas"></div>
<div class="form-group">
	<label for="Jurusan">Qty</label>
<input type="tex" name="qty"class="form-control"id="Jurusan"aria-describedby="Jurusan">
</div>
<div class="form-group">
	<label for="No_Handphone">Harga</label>
<input type="number" name="harga"class="form-control"id="no_handphone" aria-describedby="No_Handphone">
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection