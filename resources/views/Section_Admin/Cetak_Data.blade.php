<title>Inventory - Cetak Data</title>

	<p align="center"><b>Cetak Data</b></p>

    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <thead>
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

    <script type="text/javascript">
    	
    	window.print();

    </script>