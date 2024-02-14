@extends('layout.layout')

@section('title-page', 'Curso ') {{-- Añadir Nombre del Curso --}}

@section('content')
    
    <h1 style="text-align: center">Bienvenido al Curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a><br>
    <form action="{{route('cursos.destroy', $curso)}}" method="post">
        @csrf
        @method('delete')
        <button>Eliminar Curso</button>
    </form>
    <p><b>Descripcion: </b>{{$curso->description}}</p>
    <p><b>Categoria: </b>{{$curso->category}}</p>

@endsection