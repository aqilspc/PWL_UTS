@extends('layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
	<div class="card-header">Detail Baranng</div>
<div class="card-body">
<ul class="list-grouplist-group-flush">
<li class="list-group-item">
<b>Nama Barang:</b>{{$data->nama_barang}}</li>
<li class="list-group-item">
<b>Kode Barang:</b>{{$data->kode_barang}}</li>
<li class="list-group-item">
<b>Kategori Barang:</b>{{$data->kategori_barang}}</li
><li class="list-group-item"
><b>Qty:</b>{{$data->jurusan}}</li>
<li class="list-group-item">
<b>Harga:</b>{{$data->harga}}
</ul>
</div>
<a class="btn btn-success mt-3"href="{{url('/')}}">
Kembali
</a>
</div>
</div>
</div>
@endsection