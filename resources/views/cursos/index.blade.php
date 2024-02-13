@extends('layout.layout')

@section('title-page', 'Inicio')

@section('content')
    
    <h1 style="text-align: center">Pagina Principal - Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    
    <p>Cursos Disponibles</p>
    @foreach ($cursos as $curso)
        
        <li>
            <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
        </li>

    @endforeach

    {{$cursos->links()}}

@endsection