@extends('layout.layout')

@section('title-page', 'Curso ') {{-- Añadir Nombre del Curso --}}

@section('content')
    
    <h1 style="text-align: center">Bienvenido al Curso: {{$curso->name}}</h1>
    <a href="">Editar Curso</a> <br>
    <a href="">Eliminar Curso</a>
    <p><b>Descripcion: </b>{{$curso->description}}</p>
    <p><b>Categoria: </b>{{$curso->category}}</p>

@endsection