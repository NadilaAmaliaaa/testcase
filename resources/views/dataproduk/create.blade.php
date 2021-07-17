@extends('template')

@section('title', 'Tambah Produk')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Produk</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
    @if($errors->any())
			<div class="alert alert-warning">
					@foreach($errors->all() as $error)
					<strong>{{$error}}</strong><br>
					@endforeach
			</div>
	@endif
        <form action="{{ url('produk') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"> 
                <label for="nama_produk" class="controllabel">Nama Produk</label> 
                <input name="nama_produk" type="text" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="harga" class="controllabel">Harga</label> 
                <input name="harga" type="text" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="stok" class="controllabel">Stok</label> 
                <input name="stok" type="text" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="deskripsi" class="controllabel">Deskripsi</label> 
                <input name="deskripsi" type="text" class="form-control"> 
            </div>
            <div class="from-group">
                <label for="gambar" class="control-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection