@extends('Layout/Petugas_Frame')

<title>Inventory - Data Barang</title>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

@section('Frame')

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <span class="fs-3">Data  Barang Petugas</span>

        </a>

    </header>

    <a href="{{ url('/petugas/request')}}" class="btn btn-primary">Meminta Barang</a>
    <br><br>

    <table class="table table-hover table-bordered" >
        <thead class="thead-light">
            <tr>

                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stock</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($data as $item)
                <tr >

                    <td>{{  $item->kode_d }}</td>
                    <td>{{  $item->nama_d }}</td>
                    <td>{{  $item->jenis_d }}</td>
                    <td>{{  $item->stock_d }}</td>
                    
                </tr>

            @endforeach

        </tbody>

    </table>
    
    {{  $data->links() }}

@endsection