<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_barang;
use App\Models\request_barang;
use Session;
use File;

class ConfirmController extends Controller
{
    public function store(Request $confirmstore)//ini sama kayak confirmstore di DataController, untuk ngetest aja
    {

        $reqdata = request_barang::where('kode_r', $id)->first();

        //Session::flash('kode_r', $confirmstore -> $kode);
        //Session::flash('nama_r', $confirmstore -> nama_r);
        //Session::flash('jenis_r', $confirmstore -> jenis_r);
        //Session::flash('stock_r', $confirmstore -> stock_r);
        
        $data = [

            'kode_d' => $confirmstore->input('kode_r'),
            'nama_d' => $confirmstore->input('nama_r'),
            'jenis_d' => $confirmstore->input('jenis_r'),
            'stock_d' => $confirmstore->input('stock_r'),

        ];
        
        data_barang::create($data);
        return redirect('/admin/data')->with('success','Barang Berhasil Diterima');//masih stuck disini
    }

    public function destroy(string $id)//ini jugak sama kayak destroyconfirm di DataController, untuuk ngetest aja
    {

        $data = request_barang::where('kode_r', $id)->first();

        request_barang::where('kode_r', $id)->delete();
        return redirect('/admin/data/konfirmasi')->with('success', 'Permintaan Berhasil Ditolak');

    }

    
}
