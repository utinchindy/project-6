@extends('template.base')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Selamat datang di Toko kami</h1>
  <p class="lead">Di toko kami terdapat banyak promo dan diskon loh, buruan jangan sampai ketinggalan. Selamat berbelanja ya.</p>
  <hr class="my-4">
  <p>Toko kami sudah dipercayai di indonesia dan aman dalam transaksi.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Mulai Belanja</a>
</div>

@endsection