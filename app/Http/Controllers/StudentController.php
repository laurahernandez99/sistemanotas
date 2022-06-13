<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Student::all();
        return view('estudiantes.index',compact("estudiantes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante = new Student();
        return view ('estudiantes.crear' , compact('estudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante =  new Student();
        $estudiante->documento = $request->documento;
        $estudiante->nombre= $request->namee;
        $estudiante->edad = $request->edad;
        $estudiante->grado = $request->grado;
        $estudiante->save();
        session()->flash("flash.banner", "Estudiante creado de manera satisfactoria");
        return Redirect::route('estudiantes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $estudiante)
    {
        return view('estudiantes.ver' ,compact("estudiante"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $estudiante)
    {
        return view('estudiantes.edit', compact("estudiante"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $estudiante)
    {
        $estudiante->documento = $request->documento;
        $estudiante->nombre = $request->namee;
        $estudiante->edad = $request->edad;
        $estudiante->grado = $request->grado;
        $estudiante->save();
        session()->flash("flash.banner", "Estudiante modificado de manera satisfactoria");
        return Redirect:: route('estudiantes.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $estudiante)
    {
        $estudiante->delete();
        session()->flash("flash.banner", "Materia eliminada de manera correcta");
        return Redirect::route('estudiantes.index');
    }
}
