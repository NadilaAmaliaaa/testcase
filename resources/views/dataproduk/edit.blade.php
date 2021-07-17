@extends('template')

@section('title', 'Edit Produk')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Produk</h3>
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
        <form action="{{ url('produk/'.$produk->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_produk" class="control-label">Nama Produk</label>
				<input name="nama_produk" type="text"  class="form-control" value="{{$produk->nama_produk}}" required>
            </div>
			<div class="form-group">
                <label for="harga" class="control-label">Harga</label>
				<input name="harga" type="text"  class="form-control" placeholder="NIS" value="{{$produk->harga}}" required>
			</div>
			<div class="form-group">
                <label for="stok" class="control-label">Stok</label>
				<input name="stok" type="text"  class="form-control" value="{{$produk->stok}}" required>
			</div>
			<div class="form-group">
                <label for="deskripsi" class="control-label">Deskripsi</label>
				<input name="deskripsi" type="text"  class="form-control" placeholder="Nama" value="{{$produk->deskripsi}}" required>
			</div>
            <div class="from-group">
                <label for="gambar" class="control-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" value="{{$produk->gambar}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection