@extends('Layout/Admin_Frame')

@section('Frame')

<title>Inventory - Konfirmasi Barang</title>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

@section('Frame')

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-3">Konfirmasi Permintaan Barang</span>

        </a>

    </header>

    <table class="table table-hover table-bordered" >
        <thead class="thead-light">
            <tr>

                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stock</th>
                <th>Aksi</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($data as $item)
                <tr >

                    <td>{{  $item->kode_r }}</td>
                    <td>{{  $item->nama_r }}</td>
                    <td>{{  $item->jenis_r }}</td>
                    <td>{{  $item->stock_r }}</td>
                    <td>

                    	
                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menerima Data Ini?')" action=" {{ '/confirm_admin/'.$item->kode_r }}" enctype="multipart/form-data">

                    		@csrf

                        	<button type="submit" class="btn btn-primary">Terima</a>

                        </form>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menolak Data Ini?')" class='d-inline' action="{{ '/confirm_admin/'.$item->kode_r }}" method="post">

	                            @csrf
	                            @method('DELETE')
	                            <button class="btn btn-danger btn-sm" type="submit">Tolak</button>

	                    </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>
    
    {{  $data->links() }}

@endsection