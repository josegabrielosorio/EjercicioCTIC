<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['estudiantes'] = Estudiante::paginate(5);
        return view('estudiante.eindex', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.ecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEstudiante = request()->except('_token');
        Estudiante::insert($datosEstudiante);
        return redirect('estudiante')->with('mensaje','El estudiante ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.eedit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEstudiante = request()->except(['_token','_method']); 
        Estudiante::where('id','=',$id)->update($datosEstudiante);

        $estudiante=Estudiante::findOrFail($id);
        return redirect('estudiante')->with('mensaje','El estudiante ha sido modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante=Estudiante::findOrFail($id);
        Estudiante::destroy($id);
        return redirect('estudiante')->with('mensaje','El estudiante ha sido eliminado exitosamente.');
    }
}
