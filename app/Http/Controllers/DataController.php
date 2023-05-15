<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_barang;
use App\Models\request_barang;
use Session;
use File;

class DataController extends Controller
{
    function index(){

        $data = data_barang::orderBy('kode_d', 'asc')->paginate(5);
        return view('Section_Admin/Data_Barang_Admin')->with('data', $data);

    }//ini sengaja ada disini karena route::resource data_admin kemungkinan ngambil fungsi ini

    function index_petugas(){

        return view('Section_Petugas/Dashboard_Petugas');

    }

    function index_admin(){

        return view('Section_Admin/Dashboard_Admin');

    }

    function data(){
        
        $data = data_barang::orderBy('kode_d', 'asc')->paginate(5);
        return view('Section_Admin/Data_Barang_Admin')->with('data', $data);

    }//ini sama entah kenapa route::resource data_admin antara ambil index atau ngambil ini

    function data_petugas(){
        
        $data = data_barang::orderBy('kode_d', 'asc')->paginate(5);
        return view('Section_Petugas/Data_Barang_Petugas')->with('data', $data);

    }

    function data_admin(){
        
        $data = data_barang::orderBy('kode_d', 'asc')->paginate(5);
        return view('Section_Admin/Data_Barang_Admin')->with('data', $data);

    }

    function request_petugas(){
        
        return view('Section_Petugas/Request');

    }

    function konfirmasi_admin(){
        
        $data = request_barang::orderBy('kode_r', 'asc')->paginate(5);
        return view('Section_Admin/Konfirmasi')->with('data', $data);

    }


    public function create()
    {

        return view('Section_Admin/Create_Data');

    }

    public function store(Request $request)
    {

        Session::flash('kode_d', $request -> kode_d);
        Session::flash('nama_d', $request -> nama_d);
        Session::flash('jenis_d', $request -> jenis_d);
        Session::flash('stock_d', $request -> stock_d);

        $request->validate(

            [

                'kode_d' => 'required | numeric | unique:data_barang',
                'nama_d' => 'required',
                'jenis_d' => 'required',
                'stock_d' => 'required | numeric'

            ],

            [

                'kode_d.required' => 'Kode Barang Wajib Diisi',
                'kode_d.numeric' => 'Kode Barang Harus Berupa Angka',
                'nama_d.required' => 'Nama Barang Wajib Diisi',
                'jenis_d.required' => 'Jenis Barang Wajib Diisi',
                'stock_d.required' => 'jumlah Stock Wajib Diisi',
                'kode_d.unique' => "Kode Barang Sudah Dipakai Barang Lain, Silahkan Isi Kode Lain"

            ]

        );
        
        $data = [

            'kode_d' => $request->input('kode_d'),
            'nama_d' => $request->input('nama_d'),
            'jenis_d' => $request->input('jenis_d'),
            'stock_d' => $request->input('stock_d'),

        ];

        data_barang::create($data);
        return redirect('/admin/data')->with('success','Berhasil Memasukan Data');
    }

    public function requeststore(Request $requeststore)
    {

        Session::flash('kode_r', $requeststore -> kode_r);
        Session::flash('nama_r', $requeststore -> nama_r);
        Session::flash('jenis_r', $requeststore -> jenis_r);
        Session::flash('stock_r', $requeststore -> stock_r);

        $requeststore->validate(

            [

                'kode_r' => 'required | numeric | unique:request_barang',
                'nama_r' => 'required',
                'jenis_r' => 'required',
                'stock_r' => 'required | numeric'

            ],

            [

                'kode_r.required' => 'Kode Barang Wajib Diisi',
                'kode_r.numeric' => 'Kode Barang Harus Berupa Angka',
                'nama_r.required' => 'Nama Barang Wajib Diisi',
                'jenis_r.required' => 'Jenis Barang Wajib Diisi',
                'stock_r.required' => 'jumlah Stock Wajib Diisi',
                'kode_r.unique' => "Kode Barang Sudah Dipakai Barang Lain, Silahkan Isi Kode Lain"

            ]

        );
        
        $data = [

            'kode_r' => $requeststore->input('kode_r'),
            'nama_r' => $requeststore->input('nama_r'),
            'jenis_r' => $requeststore->input('jenis_r'),
            'stock_r' => $requeststore->input('stock_r'),

        ];
        
        request_barang::create($data);
        return redirect('/petugas/data')->with('success','Barang Berhasil Diminta');
    }

    public function confirmstore(Request $confirmstore)
    {

        Session::flash('kode_r', $confirmstore -> kode_r);
        Session::flash('nama_r', $confirmstore -> nama_r);
        Session::flash('jenis_r', $confirmstore -> jenis_r);
        Session::flash('stock_r', $confirmstore -> stock_r);
        
        $data = [

            'kode_d' => $confirmstore->input('kode_r'),
            'nama_d' => $confirmstore->input('nama_r'),
            'jenis_d' => $confirmstore->input('jenis_r'),
            'stock_d' => $confirmstore->input('stock_r'),

        ];
        
        data_barang::create($data);
        return redirect('/admin/data')->with('success','Barang Berhasil Diterima');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = data_barang::where('kode_d', $id)->first();
        return view('Main/Show_Data')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = data_barang::where('kode_d', $id)->first();
        return view('Section_Admin/Edit_Data')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(

            [

                'nama_d' => 'required',
                'jenis_d' => 'required',
                'stock_d' => 'required | numeric'

            ],

            [

                'nama_d.required' => 'Nama Barang Wajib Diisi',
                'jenis_d.required' => 'Jenis Barang Wajib Diisi',
                'stock_d.required' => 'Jumlah Stock Barang Wajib Diisi'

            ]

        );

        $data = [

            'nama_d' => $request->input('nama_d'),
            'jenis_d' => $request->input('jenis_d'),
            'stock_d' => $request->input('stock_d')
        ];

        data_barang::where('kode_d', $id)->update($data);
        return redirect('data')->with('success', 'Berhasil Melakukan Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = data_barang::where('kode_d', $id)->first();

        data_barang::where('kode_d', $id)->delete();
        return redirect('/admin/data')->with('success', 'Berhasil Melakukan Penghapusan');

    }

    public function destroyconfirm(string $id)
    {

        $data = data_barang::where('kode_r', $id)->first();

        data_barang::where('kode_r', $id)->delete();
        return redirect('/admin/data/konfirmasi')->with('success', 'Berhasil Melakukan Penghapusan');

    }

    public function cetak()
    {

        $data = data_barang::orderBy('kode_d', 'asc')->paginate(20);
        return view('Main/Cetak_Data')->with('data', $data);

    }
}
