@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2> GESTIÓN DE PROYECTOS</h1>

            <a class="btn btn-success" href="{{route('proyectos.create')}}" role="button">Agregar Proyecto</a>
            <br>
            <br>
            <table class="table  table-sm">
                <thead>
                  <tr class="table" style="background: #f2f2f2">
                    <th scope="col"></th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Incidencias Abiertas/totales</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($proyectostabla as $proyecto)
                    <tr>
                        <td><i class="fas fa-user"></i></td>
                        <td>{{$proyecto->nombre_proyecto}}</td>
                        <td>{{$proyecto->nombre_estado}}</td>
                        <td>{{count(eval("return " . $proyecto->incidencias_id . ";"))}}</td>
                        <td>
                            <a class="btn btn-danger " onclick="return confirm('¿Esta seguro que desea eliminar el informe ?' )" href="{{ route('proyectos.delete',[$proyecto->id])}}">
                            <span class="icon is-large">
                                <i class="fas fa-times"></i>
                            </span>
                            </a>

                    </tr>

                    @empty

                    @endforelse

                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection
