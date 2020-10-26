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
                @foreach($alumnos as $alumno) 
                <!-- BUCLE FOR PARA RECORRER LA BASE DE DATOS -->
                <tr>
                        <th scope="row">{{$alumno->dni}}</th>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellido}}</td>
                        <td>{{$alumno->curso}}</td>
                        <td>{{$alumno->grupo}}</td>
                        <td>{{$alumno->fechanacimiento}}</td>
                        <td>{{$alumno->direccion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{url('/')}}" class="btn btn-xs btn-success pull-right">Menu principal</a>
@endsection