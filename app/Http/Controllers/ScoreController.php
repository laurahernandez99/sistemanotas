<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Score::all();
        return view('notas.index' , compact("notas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$materias = Course::all();
        //$estudiantes = Student::all();
        //return view('notas.crear' , compact("materias", "estudiantes"));

        $materias = Course::all();
        $estudiantes = Student::all();
        return view('notas.crear', compact("materias" , "estudiantes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Score();
        $nota->nota = $request->nota;
        $nota->student_id = $request->estudiante;
        $nota->course_id= $request->materia;

        //$materia = Course::find($request->materia);
        //$estudiante = Student::find($request->estudiante);

        $nota->save();
        session()->flash("flash.banner" , "Nota Creada de manera satisfactoria");
        return Redirect::route('notas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
