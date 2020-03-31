<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->get();
        $proyectos = DB::table('proyectos')->get();
        $incidencias = DB::table('incidencias')->get();




        return view('usuarios.index')->with(
            [
                'users' => $users,
                'proyectos'=>$proyectos,
                'incidencias' => $incidencias
            ]
        );
    }

    public function delete($id){

        DB::table('users')->where('id',$id)->delete();



        return redirect()->route('usuarios.index');
    }
}
