@extends('template')

@section('title', 'Produk')

@section('content')
<div class="main-content">
    <h1 class="panel-title">Produk</h1>
    @if (!empty($produk_list))
    <table class="table">
        <tr>
            <th>
            @foreach($produk_list as $produk)
                <div class="container-fluid">
                    <div class="panel">
                        <!-- <div class="panel-heading"> -->
                            <div class="panel-body">
                                
                            </div>
                        <!-- </div> -->
                </div>
            </th>
            @endforeach
            <!-- <th>
                <div class="container-fluid">
                    <div class="panel">
                        <div class="panel-heading">
                        </div>
                    <div class="panel-body">
                    </div>
                </div>
            </th>
            <th>
                <div class="container-fluid">
                    <div class="panel">
                        <div class="panel-heading">
                        </div>
                    <div class="panel-body">
                    </div>
                </div>
            </th> -->
        </tr>
    </table>
    @endif
</div>
@endsection