@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>BARANG SEMBAKO TOKO ANUGRAH JAYA</h2>
		</div>
</div>
</div>
	<a href="{{url('create')}}"><button type="button" class="btn btn-info mt-3">
<i class="fa fa-home">Tambah Barang</i>
</button></a>
<br/>
<br>
<form method="post" action="{{url('cari')}}" id="myForm">
@csrf
	<div class="form-group">
	<label for="Nim">Cari Barang</label>
	<input type="text"name="cari"class="form-control"id="Nim"aria-describedby="Nim"  placeholder="Cari nama barang / kode barang / kategori barang">
		<button type="submit" class="btn btn-success mt-3">
cari
</button>

	</div>

</form> 

<table class="table table-bordered">

<tr>
	<th>ID Barang</th>
	<th>Nama Barang</th>
	<th>Kode Barang</th>
	<th>Kategori Barang</th>
	<th>Harga</th>
	<th>Quantity</th>
	<th width="280px">Action</th>
</tr>
@foreach($barang as $index => $b)
<tr>
	<td>{{$b->id_barang}}</td>
	<td>{{$b->nama_barang}}</td>
	<td>{{$b->kode_barang}}</td>
	<td>{{$b->kategori_barang}}</td>
	<td>{{number_format($b->harga)}}</td>
	<td>{{$b->qty}}</td>
		<td>
		
		<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus barang?')" href="{{url('delete/'.$b->id_barang)}}">Delete</a>

		<a class="btn btn-info"  href="{{url('show/'.$b->id_barang)}}">Show</a>

		<a class="btn btn-primary"  href="{{url('edit/'.$b->id_barang)}}">Edit</a>

	</form>

</td>
</tr>
@endforeach

</table>
{{$barang->links()}}
@endsection