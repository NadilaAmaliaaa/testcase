@extends('template')

@section('title', 'Produk Database')

@section('content')
<div class="main-content">
	<div class="container-fluid">
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Produk</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('produk/create')}}" role="button"> Tambah Data Produk</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($produk_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($produk_list as $produk)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $produk->nama_produk }}</td>
				<td>{{ $produk->harga }}</td>
				<td>{{ $produk->stok }}</td>
				<td>
					<img src="{{asset('images/' .$produk->gambar)}}" alt="" style="width:100px; height:170px">
				</td>

        <td><a class="btn btn-success btn-sm" href="{{ url('produk/' . $produk->id . '/edit') }}">Edit</a>
          <a class="btn btn-secondary btn-sm" href="{{ url('produk/' . $produk->id . '/delete') }}">Delete</a>
          <a class="btn btn-warning btn-sm" href="{{ url('produk/' . $produk->id) }}"> Detail </a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p>Tidak ada data produk.</p>
		@endif
</div>
</div>
</div>
@endsection