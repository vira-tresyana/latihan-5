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
					<label for="" class="control-label">Nama Brand</label>
					<input type="text" class="form-control" name="brand">
					</div>

					<div class="form-group">
					<label for="" class="control-label">Nama Produk</label>
					<input type="text" class="form-control" name="nama">
					</div>
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Berat</label>
							<input type="text" class="form-control" name="berat">
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="stok">
							</div>
						</div>
						<div class="form-group mt-3">
						    <label for="exampleFormControlSelect1">Kategori Produk</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
						      <option selected="" disabled="">Pilih Kategori</option>
						      <option value="1">lampu sepeda depan belakang led charge bicycle led usb rechargeable</option>
						      <option value="2">Tas haru olive</option>
						      <option value="3">Tas Gucci</option>
						    </select>
						</div>
					</div>

					<div class="form-group">
					<label for="" class="control-label">Deskripsi</label>
					<textarea name="deskripsi" class="form-control"></textarea>
					
					</div>
					<button class="btn btn-dark float-right" type="submit"><i class="fa fa-save"> Simpan</i></button>

					</form>
					
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>


@endsection 