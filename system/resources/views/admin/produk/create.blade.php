@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk')}}" method="post">	
						@csrf
						<div class="form-group">
							<label for="brand" class="control-label">Brand Produk</label>
							<input type="text" name="brand" id="brand" class="form-control">
						</div>
						<div class="form-group">
							<label for="nama" class="control-label">Nama Produk</label>
							<input type="text" name="nama" id="nama" class="form-control">
						</div>
						<div class="row">
						    <div class="col">
						    	<label for="harga" class="control-label">Harga Produk</label>
						      <input type="text" class="form-control" name="harga" id="harga">
						    </div>
						    <div class="col">
						    	<label for="stok" class="control-label">Stok Produk</label>
						      <input type="text" class="form-control" name="stok" id="stok">
						    </div>
						</div>
						<div class="form-group mt-3">
						    <label for="exampleFormControlSelect1">Kategori Produk</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
						      <option selected="" disabled="">Pilih Kategori</option>
						      <option value="1">Laptop</option>
						      <option value="2">Handphone</option>
						      <option value="3">Printer</option>
						      <option value="4">Pakaian Wanita</option>
						      <option value="5">Pakaian Pria</option>
						    </select>
						</div>
						<div class="form-group">
							<label for="deskripsi" class="control-label">Deskripsi Produk</label>
							<textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
						</div>
						<button class="btn btn-dark btn-sm"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection