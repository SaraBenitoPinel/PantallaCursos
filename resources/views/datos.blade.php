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

        </div>
    </div>
</div>
<a href="{{url('/')}}" class="btn btn-xs btn-success pull-right">Menu principal</a>
@endsection