@extends('Layout/Dashboard_Frame')

<title>Inventory - Data Barang</title>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

@section('Frame')

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-3">Data  Barang</span>

        </a>

    </header>

    <a href="{{ url('/data/create')}}" class="btn btn-primary">Tambah Data</a>
    <a href="{{ url('/cetak')}}" target="_blank" class="btn btn-primary">Cetak Data</a>
    <br><br>

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

                    <td>{{  $item->kode_d }}</td>
                    <td>{{  $item->nama_d }}</td>
                    <td>{{  $item->jenis_d }}</td>
                    <td>{{  $item->stock_d }}</td>
                    <td>

                        <a class='btn btn-primary btn-sm' href='{{ url('/data/'.$item->kode_d.'/edit') }}'>Edit</a>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class='d-inline' action="{{ '/data/'.$item->kode_d }}" method="post">

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>
    
    {{  $data->links() }}

@endsection