@extends('layout.layout')

@section('title-page', 'Home')

@section('content')
    
    <h1 style="text-align: center">Pagina De Inicio</h1>
    <a href="{{route('cursos.index')}}">Cursos Disponibles</a><br>
    <a href="{{route('cursos.create')}}">Crear Curso</a>

@endsection