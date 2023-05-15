<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\role;
use Hash;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    function index()
    {

        return view("Main/Login");

    }

    function login(Request $request)
    {

        Session::flash('email', $request->email);

        $request -> validate(

            [

                'email' => 'required',
                'password' => 'required'


            ],

            [

                'email.required' => "Email Wajib Diisi",
                'password.required' => "password Wajib Diisi"

            ]

        );  

        $infologin = [

            'email' => $request->email,
            'password' => $request->password

        ];

        $datarole = $request->role;

        if(Auth::attempt($infologin))
        {

            if(Auth::user()->role == 1)
            {

                return redirect('/petugas/dashboard')->with('success','Selamat Datang Petugas');

            }

            else
            {

                return redirect('/admin/dashboard')->with('success','Selamat Datang Admin');

            }

        }

        else
        {

            return redirect('sesi')->withErrors("Username Atau Password Yang Dimasukan Tidak Valid");

        }


    }

    function logout(){

        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');

    }

    function register()
    {

        $role = role::all();
        return view('Main/Register', compact('role'));

    }

    function create(Request $request)
    {

        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        Session::flash('role', $request->role);

        $request -> validate(

            [

                'email' => 'required | email | unique:users',
                'name' => 'required',
                'password' => 'required | min:6',
                'role' => 'required'


            ],

            [

                'name.required' => "Nama Wajib Diisi",
                'email.required' => "Email Wajib Diisi",
                'email.email' => "Email Tidak Valid, Silahkan Periksa Kembali",
                'email.unique' => "Email Yang Dimasukan Sudah Dipakai, Silahkan Coba Lagi Dengan Email Lain",
                'password.required' => "Password Wajib Diisi",
                'password.min' => "Password Minimal Harus 6 Karakter",
                'role.required' => "Role Wajib Dipilih"

            ]

        );  

        $data = [

            'email' => $request -> email,
            'name' => $request -> name,
            'password' => Hash::make($request -> password),
            'role' => $request -> role

        ];

        User::create($data);

        $infologin = [

            'email' => $request->email,
            'password' => $request->password

        ];

        $datarole = $request -> role;

        if(Auth::attempt($infologin))
        {

            if($datarole == 1)
            {

                return redirect('dashboard_petugas')->with('success','Register Petugas Berhasil');

            }

            else
            {

                return redirect('dashboard_admin')->with('success','Register Admin Berhasil');

            }

        }

        else
        {

            return redirect('sesi')->withErrors("Username Atau Password Yang Dimasukan Tidak Valid");

        }

    }

    function getname(){

        $userName = auth()->users()->name; 
        var_dump($userName);

    }
}
