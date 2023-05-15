<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Session;
use File;

class SiswaController extends Controller
{
    //
    function index(){

        return view('Main/Dashboard');

    }

    function data(){
        
        $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        return view('Main/Data_Barang')->with('data', $data);

    }

    public function create()
    {

        return view('Main/Create_Data');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('nomor_induk', $request -> nomor_induk);
        Session::flash('nama', $request -> nama);
        Session::flash('alamat', $request -> alamat);

        $request->validate(

            [

                'nomor_induk' => 'required | numeric',
                'nama' => 'required',
                'alamat' => 'required',

            ],

            [

                'nomor_induk.required' => 'Nomor Induk Wajib Diisi',
                'nomor_induk.numeric' => 'Nomor Induk Harus Berupa Angka',
                'nama.required' => 'Nama Wajib Diisi',
                'alamat.required' => 'Alamat Wajib Diisi',

            ]

        );
        
        $data = [

            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),

        ];
        siswa::create($data);
        return redirect('data')->with('success','Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        return view('Main/Show_Data')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        return view('Main/Edit_Data')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(

            [

                'nama' => 'required',
                'alamat' => 'required'

            ],

            [

                'nama.required' => 'Nama Wajib Diisi',
                'alamat.required' => 'Alamat Wajib Diisi'

            ]

        );

        $data = [

            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat')
        ];

        siswa::where('nomor_induk', $id)->update($data);
        return redirect('data')->with('success', 'Berhasil Melakukan Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();

        siswa::where('nomor_induk', $id)->delete();
        return redirect('data')->with('success', 'Berhasil Melakukan Penghapusan');
    }
}
