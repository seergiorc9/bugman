<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoproyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadoproyecto')->truncate();
        DB::table('estadoproyecto')->insert(
            [[
                'nombre_estado' => 'No Inicializado'
            ],[
                'nombre_estado' => 'En Proceso'
            ],[
                'nombre_estado' => 'Finalizado'
            ]]);
    }
}
