@extends('template')

@section('title', 'Rincian data produk')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Rincian Data Produk</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="">
			@csrf
			<table class="table">
						<tr>
			<th>Nama Produk</th>
			<td>{{ $produk->nama_produk }}</td>
			</tr>

			<tr>
			<th>Harga</th>
			<td>{{ $produk->harga }}</td>
			</tr>

			<tr>
			<th>Stok</th>
			<td>{{ $produk->stok}}</td>
			</tr>

			<tr>
			<th>Deskripsi</th>
			<td>{{ $produk->deskripsi}}</td>
			</tr>

			<tr>
			<th>Foto</th>
			<td>
				<img src="{{asset('images/' .$produk->gambar)}}" alt="" style="width:200px; height:270px">
			</td>
			<tr>
			</tr>
			</table>
        </form>
    </div>
</div>

@endsection