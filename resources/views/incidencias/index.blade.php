@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2> GESTIÓN DE INCIDENCIAS</h1>

            <a class="btn btn-success" href="{{route('incidencias.create')}}" role="button">Agregar Incidenias</a>
            <br>
            <br>
            <table class="table  table-sm">
                <thead>
                  <tr class="table" style="background: #f2f2f2">
                    <th scope="col"></th>
                    <th scope="col">Nombre Incidencia</th>
                    <th scope="col">estado</th>
                    <th scope="col">Fecha Ingreso</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($incidencias as $incidencia)
                    <tr>
                        <td><i class="fas fa-user"></i></td>
                        <td>{{$incidencia->nombre_incidencia}}</td>
                        <td>{{$incidencia->nombre_estado_inci}}</td>
                        <td>{{$incidencia->created_at}}</td>
                        <td><a class="btn btn-danger " onclick="return confirm('¿Esta seguro que desea eliminar esta incidencia ?' )" href="{{ route('incidencias.delete',[$incidencia->id,$incidencia->proyecto_id])}}">
                            <span class="icon is-large">
                                <i class="fas fa-times"></i>
                            </span></td>
                    </tr>

                    @endforeach

                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection
