@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Produk
				</div>
				<div class="card-body">
					<div class="jumbotron">
					  <h1 class="display-5">{{$produk->nama}}</h1><hr>
						Kategori : {{$produk->kategori}}
					  <p class="lead"><strong class="text-dark">Stok Tersedia <b>{{$produk->stok}}</b> | Harga Rp. {{number_format($produk->harga)}} </strong></p>
					  <hr class="my-4">
					  <p>Deskripsi Produk : <br>
					  	{!! nl2br($produk->deskripsi) !!}</p>
					  <a class="btn btn-success btn-sm" href="#" role="button">Masukkan Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection