<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index(){

        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function store(Request $request){
        
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);

    }

    public function update(Request $request, Curso $curso){
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

}
