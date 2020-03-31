@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2> GESTIÓN DE USUARIOS</h1>

            <br>
            <br>
            <table class="table  table-sm">
                <thead>
                  <tr class="table" style="background: #f2f2f2">
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td><i class="fas fa-user"></i/td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a class="btn btn-danger " onclick="return confirm('¿Esta seguro que desea eliminar el informe ?' )" href="{{ route('usuarios.delete',[$user->id])}}">
                            <span class="icon is-large">
                                <i class="fas fa-times"></i>
                            </span>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection
