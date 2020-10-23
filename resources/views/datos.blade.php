@extends('layouts.menu')
@section('titulo','Cursos')

@section('nombre')
<br>
<div align="center">
    <h1 style="color:black">CURSOS DEL COLEGIO LAS AMAPOLAS</h1>
</div>
<br><br>
@endsection

@section('contenido')
<h1>Datos de los alumnos del curso de: {{$curso}}</h1>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <table class="table table-bordered table-success">
                <thead>
                    <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CURSO</th>
                        <th scope="col">GRUPO</th>
                        <th scope="col">FECHA NACIMIENTO</th>
                        <th scope="col">DIRECCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$alumnos[0]->dni}}</th>
                        <td>{{$alumnos[0]->nombre}}</td>
                        <td>{{$alumnos[0]->apellido}}</td>
                        <td>{{$alumnos[0]->curso}}</td>
                        <td>{{$alumnos[0]->grupo}}</td>
                        <td>{{$alumnos[0]->fechanacimiento}}</td>
                        <td>{{$alumnos[0]->direccion}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{url('/')}}" class="btn btn-xs btn-success pull-right">Menu principal</a>
@endsection