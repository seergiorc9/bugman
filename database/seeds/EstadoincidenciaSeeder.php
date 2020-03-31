<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoincidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadoincidencia')->truncate();
        DB::table('estadoincidencia')->insert(
            [[
                'nombre_estado_inci' => 'No Iniciado '
            ],[
                'nombre_estado_inci' => 'Asignado'
            ],[
                'nombre_estado_inci' => 'En Proceso'
            ],[
                'nombre_estado_inci' => 'Finalizado'
            ],[
                'nombre_estado_inci' => 'En Validación Cliente'
            ],[
                'nombre_estado_inci' => 'Cerrada'
            ],[
                'nombre_estado_inci' => 'No Aplica'
            ]]);
    }
}
