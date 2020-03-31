@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-7">
            <h2> GESTIÓN DE USUARIOS</h1>

                <div class="card" >
                    <article class="card-group-item ">
                        <div class="card-header bg-primary text-white"><h5>Cuadro de Resumen de incidencias</h5></div>
                        <div class="card-body text-black">
                            <p class="text-monospace">Totales registradas: {{count($incidencias)}}</p>
                            <p class="text-monospace">Asignadas: {{count($incidenciasasignado)}}</p>
                            <p class="text-monospace">En Proceso: {{count($incidenciasenproceso)}}</p>
                            <p class="text-monospace">Finalizadas: {{count($incidenciasfinalizado)}}</p>
                            <p class="text-monospace">En Validación Cliente: {{count($incidenciasvalidacion)}}</p>
                            <p class="text-monospace">Cerradas: {{count($incidenciascerrada)}}</p>
                            <p class="text-monospace">No aplica: {{count($incidenciasnoaplica)}}</p>

                        </div>
                    </article>
                </div>

        </div>
    </div>
</div>
@endsection
