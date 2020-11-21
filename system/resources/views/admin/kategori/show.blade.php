@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Pada Kategori {{$kategori->nama}}
				</div>
				<div class="card-body">
					<table class="table table-hover table-responsive">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Aksi</th>
					      <th scope="col">Nama Produk</th>
					      <th scope="col">Harga Produk</th>
					      <th scope="col">Stok roduk</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">{{$kategori->id}}</th>
					      <td>
					      	<a href="{{url('admin/produk')}}" class="btn btn-dark btn-sm"><i class="fa fa-eye"></i></a>
					      </td>
					      <td>{{$kategori->nama}}</td>
					      <td>@mdo</td>
					      <td>@mdo</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection