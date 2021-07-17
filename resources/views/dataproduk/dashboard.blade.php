@extends('template')

@section('title', 'Katalog Produk')

@section('content')
<div class="main-content">
	<div class="container-fluid">
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Katalog Produk</h3>
		<div class="right">
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($produk_list))
        <table>
        @foreach($produk_list as $produk)
            <div class="row">
                <div class="col-sm-3">
                <div class="card border-dark mb-3" style="max-width: 20rem;">
                    <img class="card-img-top" src="{{asset('images/' .$produk->gambar)}}" style="width:200px; height:170px">
                    <div class="card-body">
                        <div class="text-center">
                            <b class="card-title">{{ $produk->nama_produk }}</b> <br>
                            <b class="card-title">Rp. {{ $produk->harga }}</b>
                            <p class="card-text">{{ $produk->deskripsi }}</p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </table>
		@endif
    </div>
    </div>
</div>
@endsection


<style>
  .border-dark { border: 1px solid #000000; }
</style>