@extends('Layout/Petugas_Frame')

<title>Inventory - Meminta Barang</title>

@section('Frame')

	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-4">Meminta Barang</span>

        </a>

    </header>

	<div> 

		<form method="post" action="/petugas/request_process" enctype="multipart/form-data">

		@csrf

  		<div class="mb-3">

    		<label for="kode_r" class="form-label">Kode Barang</label>
    		<input type="text" class="form-control" id="kode_r" name="kode_r" value="{{ Session::get('kode_r') }}">

  		</div>

  		<div class="mb-3">

    		<label for="nama_r" class="form-label">Nama Barang</label>
    		<input type="text" class="form-control" id="nama_r" name="nama_r" value="{{ Session::get('nama_r') }}">

  		</div>

  		<div class="mb-3">

    		<label for="jenis_r" class="form-label">Jenis Barang</label>
    		<input type="text" class="form-control" id="jenis_r" name="jenis_r" value="{{ Session::get('jenis_r') }}">

  		</div>

  		<div class="mb-3">

    		<label for="stock_r" class="form-label">Stock Barang</label>
    		<input type="text" class="form-control" id="stock_r" name="stock_r" value="{{ Session::get('stock_r') }}">

  		</div>

  		<button type="submit" class="btn btn-primary">Tambah</button>

  		<a href='/petugas/data' class="btn btn-secondary">Kembali</a>

  		</div>

	</form>


	</div>

@endsection