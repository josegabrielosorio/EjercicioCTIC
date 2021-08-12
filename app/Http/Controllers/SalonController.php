<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['salons'] = Salon::paginate(5);
        return view('salon.sindex', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salon.screate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosSalon = request()->except('_token');
        Salon::insert($datosSalon);
        return redirect('salon')->with('mensaje','El salón ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function show(Salon $salon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon=Salon::findOrFail($id);
        return view('salon.sedit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosSalon = request()->except(['_token','_method']); 
        Salon::where('id','=',$id)->update($datosSalon);

        $salon=Salon::findOrFail($id);
        return redirect('salon')->with('mensaje','El salón ha sido modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon=Salon::findOrFail($id);
        Salon::destroy($id);
        return redirect('salon')->with('mensaje','El salón ha sido eliminado exitosamente.');
    }
}
