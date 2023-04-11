<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listarsolicitudes()
    {

        // $infos = User::where('tipo', 2)->get();
        // // $infos = Info::join('users', 'users.id', '=', 'infos.user_id')->get();

        // // return redirect()->route('admin.index');
        // return view('admin.postulantes', compact('infos'));
    }

    public function show_agregar_soli()
    {

        $clientes = DB::table('clientes')->get();
        $destinos = DB::table('destinos')->get();
        // $infos = Info::join('users', 'users.id', '=', 'infos.user_id')->get();

        // return redirect()->route('admin.index');
        return view('admin.nueva-solicitud', compact('clientes', 'destinos'));
    }
}
