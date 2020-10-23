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
<div align="center">
    <a href="{{url('pregunta', ['infantil'])}}" class="btn btn-xs btn-light pull-right" style="color:navy">INFANTIL</a>
    <a href="{{url('pregunta', ['primaria'])}}" class="btn btn-xs btn-light pull-right" style="color:navy">PRIMARIA</a>
    <a href="{{url('pregunta', ['secundaria'])}}" class="btn btn-xs btn-light pull-right" style="color:navy">SECUNDARIA</a>
</div>
@endsection