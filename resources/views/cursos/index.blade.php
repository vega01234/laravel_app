@extends('layout.layout')

@section('title-page', 'Inicio')

@section('content')

    @include('layout.partials.navbar')
    
    <h1 style="text-align: center">Pagina Principal - Cursos</h1>
    
    <p>Cursos Disponibles</p>
    @foreach ($cursos as $curso)
        
        <li>
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
        </li>

    @endforeach

    {{$cursos->links()}}

@endsection