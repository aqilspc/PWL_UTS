@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>BARANG SEMBAKO TOKO ANUGRAH JAYA</h2>
		</div>
</div>
</div>
<br>
<form method="post" action="{{url('cari')}}" id="myForm">
@csrf
	<div class="form-group">
	<label for="Nim">Cari Barang</label>
	<input type="text"name="cari"class="form-control"id="Nim"aria-describedby="Nim"  placeholder="Cari nama barang / kode barang / kategori barang">
		<button type="submit" class="btn btn-success mt-3">
cari
</button>
	<a href="{{url('/')}}"><button type="button" class="btn btn-info mt-3">
<i class="fa fa-home">Home</i>
</button></a>
	</div>

</form> 

<table class="table table-bordered">
<h2>HASIL CARI {{$object}}</h2>
<tr>
	<th>ID Barang</th>
	<th>Nama Barang</th>
	<th>Kode Barang</th>
	<th>Kategori Barang</th>
	<th>Harga</th>
	<th>Quantity</th>
</tr>

<tr>
	<td>{{$barang->id_barang}}</td>
	<td>{{$barang->nama_barang}}</td>
	<td>{{$barang->kode_barang}}</td>
	<td>{{$barang->kategori_barang}}</td>
	<td>{{number_format($barang->harga)}}</td>
	<td>{{$barang->qty}}</td>
</tr>


</table>
@endsection