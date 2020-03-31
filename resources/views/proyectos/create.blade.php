@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2> GESTIÓN DE PROYECTOS</h1>
                <br>
                <div class="card text-white  mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-primary"><h5>Agregar Proyecto</h5></div>
                    <div class="card-body">
                        <form method="POST" action="{{route('proyectos.store')}}" style="max-inline-size: fit-content;">
                            @csrf
                            <div class="form-group">
                              <input class="form-control form-control" type="text" placeholder="Ingresar nombre proyecto" name="nombreproyecto">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="estadoproyecto">
                                    <option disabled selected>Estado proyecto</option>
                                    @foreach ($estados as $estado)
                                        <option value={{$estado->id}}>{{$estado->nombre_estado}}</option>
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
