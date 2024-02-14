@extends('layout.layout')

@section('title-page', 'Crear Curso')

@section('content')
    
    <h1 style="text-align: center">Crear Cursos</h1>

    <div>
        <form action="{{route('cursos.store')}}" method="post">

            @csrf

            <div>
                <label for="name">Nombre del Curso</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"><br>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="description">Descripcion</label> <br>
                <textarea name="description" id="description" cols="50" rows="10"></textarea><br>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" value="{{old('category')}}"><br>
                @error('category')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit">Registrar Curso</button>
        </form>
    </div>

@endsection