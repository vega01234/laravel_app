@extends('layout.layout')

@section('title-page', 'Editar Curso')

@section('content')
    
    <h1 style="text-align: center">Editar Curso: {{$curso->name}}</h1>  
    
    <div>
        <form action="{{route('cursos.update', $curso)}}" method="post">

            @csrf
            @method('put')

            <div>
                <label for="name">Nombre del Curso</label>
                <input type="text" name="name" id="name" value="{{old('name', $curso->name)}}"><br>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="description">Descripcion</label> <br>
                <textarea name="description" id="description" cols="50" rows="10">{{old('description', $curso->description)}}</textarea><br>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" value="{{old('category', $curso->category)}}"><br>
                @error('category')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit">Actualizar Curso</button>
        </form>
    </div>

@endsection