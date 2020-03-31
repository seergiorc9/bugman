<?php

namespace App\Http\Controllers;

use App\Incidencias;
use App\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncidenciasController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->get();
        $proyectos = DB::table('proyectos')->get();

        $incidencias = DB::table('incidencias')
        ->leftJoin('estadoincidencia','incidencias.estadoindi_id','=','estadoincidencia.id')
        ->select('incidencias.id', 'incidencias.nombre_incidencia','incidencias.created_at','estadoincidencia.nombre_estado_inci','incidencias.proyecto_id')
        ->get();




        return view('incidencias.index')->with(
            [
                'users' => $users,
                'proyectos'=>$proyectos,
                'incidencias' => $incidencias
            ]
        );
    }

    public function create(){
        $users = DB::table('users')->get();
        $proyectos = DB::table('proyectos')->get();
        $incidencias = DB::table('incidencias')->get();

        $estados = DB::table('estadoincidencia')->get();




        return view('incidencias.create')->with(
            [
                'users' => $users,
                'proyectos' => $proyectos,
                'estados' => $estados,
                'incidencias' => $incidencias
            ]
        );
    }

    public function store(Request $request){

        $id_proyecto = $request->input('selectproyecto');

        $proyectos = DB::table('proyectos')
            ->when($id_proyecto, function($query) use($id_proyecto) {
                return $query->where('proyectos.id', $id_proyecto);
            })
            ->get();



        Incidencias::create([
            'nombre_incidencia'=>request('nombreincidencia'),
            'detalles'=>request('detalles'),
            'responsable_id'=>request('responsableincidencia'),
            'proyecto_id'=>$id_proyecto,
            'estadoindi_id'=>request('estadoincidencia'),
        ]);

        $incidencias = DB::table('incidencias')->get();


        $proyectofind = Proyectos::find($proyectos[0]->id);
        $incidenciasarray = array();

        foreach($proyectofind->incidencias_id as $index => $incidencia){
            array_push($incidenciasarray, $incidencia);
        }


        array_push($incidenciasarray, $incidencias->last()->id);
        $proyectofind->incidencias_id = $incidenciasarray;

        $proyectofind->save();


        return redirect()->route('incidencias.index');
    }

    public function delete($id,$idproyect){

        $proyectofind = Proyectos::find($idproyect);
        if($proyectofind != null){
        $proyecto_inci_id = array_search($id, $proyectofind->incidencias_id);

        $incidenciasarray = array();

        foreach($proyectofind->incidencias_id as $index => $incidencia){
            array_push($incidenciasarray, $incidencia);
        }

        unset($incidenciasarray[$proyecto_inci_id]);

        $proyectofind->incidencias_id = $incidenciasarray;
        $proyectofind->save();
    }
        DB::table('incidencias')->where('id',$id)->delete();



        return redirect()->route('incidencias.index');
    }
}
