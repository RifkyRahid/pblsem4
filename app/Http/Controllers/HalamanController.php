<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("Halaman/index");
    }

    function tentang()
    {
         return view("Halaman/tentang");
    }

    function kontak()
    {
        $data = [
            'judul' => 'Ini Adalah Halaman Kontak',
            'kontak' => [
                'email' => 'arya96625@gail.com',
                'instagram' => '@Blue_Admiral_'
            ]
        ];
        return view("Halaman/kontak")->with($data);
    }
}
