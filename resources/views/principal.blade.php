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
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <a href="{{url('api/alumnos', ['infantil'])}}" class="btn btn-block btn-light pull-right"><b>INFANTIL</b></a>
            <br>
            <a href="{{url('api/alumnos', ['primaria'])}}" class="btn btn-block btn-light pull-right"><b>PRIMARIA</b></a>
            <br>
            <a href="{{url('api/alumnos', ['secundaria'])}}" class="btn btn-block btn-light pull-right"><b>SECUNDARIA</b></a>
        </div>
    </div>
</div>
@endsection