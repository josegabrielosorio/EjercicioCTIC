<?php

namespace App\Http\Controllers;

use App\Models\tiempo;
use Illuminate\Http\Request;

class TiempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiempo.tcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTiempo = request()->except('_token');
        Tiempo::insert($datosTiempo);
        return redirect('curso')->with('mensaje','Tiempo ajustado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tiempo  $tiempo
     * @return \Illuminate\Http\Response
     */
    public function show(tiempo $tiempo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiempo  $tiempo
     * @return \Illuminate\Http\Response
     */
    public function edit(tiempo $tiempo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tiempo  $tiempo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiempo $tiempo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiempo  $tiempo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiempo $tiempo)
    {
        //
    }
}
