<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['profesors'] = Profesor::paginate(5);
        return view('profesor.pindex', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.pcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProfesor = request()->except('_token');
        Profesor::insert($datosProfesor);
        return redirect('profesor')->with('mensaje','El profesor ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor=Profesor::findOrFail($id);
        return view('profesor.pedit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProfesor = request()->except(['_token','_method']); 
        Profesor::where('id','=',$id)->update($datosProfesor);

        $profesor=Profesor::findOrFail($id);
        return redirect('profesor')->with('mensaje','El profesor ha sido modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor=Profesor::findOrFail($id);
        Profesor::destroy($id);
        return redirect('profesor')->with('mensaje','El profesor ha sido eliminado exitosamente.');
    }
}
