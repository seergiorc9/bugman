@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2> GESTIÓN DE INCIDENCIAS</h1>

                <div class="card text-white  mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-primary"><h5>Agregar Incidencia</h5></div>
                    <div class="card-body">
                        <form method="POST" action="{{route('incidencias.store')}}" style="max-inline-size: fit-content;">
                            @csrf

                            <div class="form-group">
                              <input class="form-control form-control" type="text" placeholder="Ingresar Nombre Incidencia" name="nombreincidencia">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="selectproyecto">
                                    <option disabled selected>Proyecto</option>
                                    @foreach ($proyectos as $eleproyecto)
                                        <option value={{$eleproyecto->id}}>{{$eleproyecto->nombre_proyecto}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="form-control form-control" type="text" placeholder="Detalles de la prueba" name="detalles">
                            </div>


                            <div class="form-group">
                                <select class="form-control" name="estadoincidencia">
                                    <option disabled selected>Estado incidencia</option>
                                    @foreach ($estados as $estado)
                                        <option value={{$estado->id}}>{{$estado->nombre_estado_inci}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="responsableincidencia">
                                    <option disabled selected>Asignar responsable</option>
                                    @foreach ($users as $user)
                                        <option value={{$user->id}}>{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Agregar</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
