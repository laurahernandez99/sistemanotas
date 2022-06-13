<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Course::all();
        return view('materias.index', compact("materias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = new Course();
        return view('materias.crear' , compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Course();
        $materia->nombre = $request->nombrem;
        $materia->version = $request->version;
        $materia->save();
        session()->flash("flash.banner", "Materia  creada de manera satisfactoria");
        return Redirect::route('materias.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $materia)
    {
        return view('materias.ver', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $materia)
    {
        $materia->nombre = $request->nombrem;
        $materia->version = $request->version;
        $materia->save();
        session()->flash("flash.banner", "Materia modificada de manera satisfactoria");
        return Redirect::route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $materia)
    {
        $materia->delete();
        session()->flash("flash.banner", "Materia eliminada de manera satisfactoria");
        return Redirect::route('materias.index');
    }
}
