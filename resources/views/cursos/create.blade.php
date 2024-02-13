@extends('layout.layout')

@section('title-page', 'Crear Curso')

@section('content')
    
    <h1 style="text-align: center">Crear Cursos</h1>

    <div>
        <form action="" method="post">

            @csrf

            <div>
                <label for="name">Nombre del Curso</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="description">Descripcion</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category">
            </div>
            <button type="submit">Registrar Curso</button>
        </form>
    </div>

@endsection