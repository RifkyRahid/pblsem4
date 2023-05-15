@extends('Layout/Dashboard_Frame')

<title>Inventory - Menambah Data</title>

@section('Frame')

	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">Menambah Data</span>

        </a>

    </header>

	<div> 

		<form method="post" action="/dashboard" enctype="multipart/form-data">

		@csrf

  		<div class="mb-3">

    		<label for="kode_d" class="form-label">Kode Barang</label>
    		<input type="text" class="form-control" id="kode_d" name="kode_d" value="{{ Session::get('kode_d') }}">

  		</div>

  		<div class="mb-3">

    		<label for="nama_d" class="form-label">Nama Barang</label>
    		<input type="text" class="form-control" id="nama_d" name="nama_d" value="{{ Session::get('nama_d') }}">

  		</div>

  		<div class="mb-3">

    		<label for="jenis_d" class="form-label">Jenis Barang</label>
    		<input type="text" class="form-control" id="jenis_d" name="jenis_d" value="{{ Session::get('jenis_d') }}">

  		</div>

  		<div class="mb-3">

    		<label for="stock_d" class="form-label">Stock Barang</label>
    		<input type="text" class="form-control" id="stock_d" name="stock_d" value="{{ Session::get('stock_d') }}">

  		</div>

  		<button type="submit" class="btn btn-primary">Tambah</button>

  		<a href='/data' class="btn btn-secondary">Kembali</a>

  		</div>

	</form>


	</div>

@endsection