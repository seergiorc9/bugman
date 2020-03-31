<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = DB::table('users')->get();
        $proyectos = DB::table('proyectos')->get();
        $incidencias = DB::table('incidencias')->get();
        $incidenciasasignado = DB::table('incidencias')
            ->where('id', '2')
            ->get();
        $incidenciasenproceso = DB::table('incidencias')
            ->where('id', '3')
            ->get();
        $incidenciasfinalizado = DB::table('incidencias')
            ->where('id', '4')
            ->get();
        $incidenciasvalidacion = DB::table('incidencias')
            ->where('id', '5')
            ->get();
        $incidenciascerrada = DB::table('incidencias')
            ->where('id', '6')
            ->get();
        $incidenciasnoaplica = DB::table('incidencias')
            ->where('id', '7')
            ->get();

        return view('home')->with(
            [
                'users' => $users,
                'proyectos' => $proyectos,
                'incidencias' => $incidencias,
                'incidenciasasignado' => $incidenciasasignado,
                'incidenciasenproceso' => $incidenciasenproceso,
                'incidenciasfinalizado' => $incidenciasfinalizado,
                'incidenciasvalidacion' => $incidenciasvalidacion,
                'incidenciascerrada' => $incidenciascerrada,
                'incidenciasnoaplica' => $incidenciasnoaplica,
            ]
        );
    }
}
