@extends('layout.layout')

@section('title-page', 'Contactanos')

@section('content')
    
    <h1 style="text-align: center">Contactanos</h1>

    <div>
        <form action="{{route('contactanos.store')}}" method="post">
            @csrf
            <div>
                <label for="name">Nombre Completo</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"><br>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="email" name="email" id="email" value="{{old('email')}}"><br>
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="text">Comentario</label><br>
                <textarea name="text" id="text" cols="50" rows="10">{{old('text')}}</textarea><br>
                @error('text')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit">Enviar Comentarios</button>
        </form>
    </div>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif

@endsection