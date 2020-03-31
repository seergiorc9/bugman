<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proyectos;


class ProyectosController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->get();
        $proyectos = DB::table('proyectos')->get();
        $incidencias = DB::table('incidencias')->get();

        $proyectostabla = DB::table('proyectos')
        ->leftJoin('estadoproyecto','proyectos.estado_id','=','estadoproyecto.id')
        ->select('proyectos.id', 'proyectos.nombre_proyecto','estadoproyecto.nombre_estado','proyectos.incidencias_id')
        ->get();




        return view('proyectos.index')->with(
            [
                'users' => $users,
                'proyectos' => $proyectos,
                'proyectostabla' => $proyectostabla,
                'incidencias' => $incidencias
            ]
        );
    }

    public function create(){
        $users = DB::table('users')->get();

        $incidencias = DB::table('incidencias')->get();

        $proyectos = DB::table('proyectos')->get();
        $estados = DB::table('estadoproyecto')->get();




        return view('proyectos.create')->with(
            [
                'users' => $users,
                'proyectos' => $proyectos,
                'estados' => $estados,
                'incidencias' => $incidencias
            ]
        );
    }

    public function store(){


        $nombre = request('nombreproyecto');

        Proyectos::create([
            'nombre_proyecto'=>$nombre,
            'estado_id'=>request('estadoproyecto'),
        ]);


        return redirect()->route('proyectos.index');
    }

    public function delete($id){

        DB::table('proyectos')->where('id',$id)->delete();



        return redirect()->route('proyectos.index');
    }

}
