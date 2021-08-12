<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Salon;
use App\Models\Profesor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cursos'] = Curso::paginate(5);
        /*$hoy=date('h:i:s'); */
        /*if($hoy == $hoy){
            return view('curso.cindex', $datos,$hoy)->with('mensaje', print_r($hoy));
     }*/
        
        return view('curso.cindex', $datos);
        /*->with('mensaje', print_r(date('h:m:s')));; */
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salons=Salon::all();
        $data=array("salons"=>$salons);
        $profesors=Profesor::all();
        $data1=array("profesors"=>$profesors); 
        return view('curso.ccreate',$data+$data1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Fecha'=>'required|date',
            'Hora'=>'required',
            'Actu'=>'required'
        ];
        $mensaje=[
            'required'=>'El campo :attribute no puede quedar vacio.',
        ];

        $this->validate($request,$campos,$mensaje);
        $datosCurso = request()->except('_token');
        Curso::insert($datosCurso);
        return redirect('curso')->with('mensaje','El curso ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=Curso::findOrFail($id);
        $salons=Salon::all();
        $data=array("salons"=>$salons);
        $profesors=Profesor::all();
        $data1=array("profesors"=>$profesors);
        return view('curso.cedit', compact('curso'), $data+$data1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCurso = request()->except(['_token','_method']); 
        Curso::where('id','=',$id)->update($datosCurso);

        $curso=Curso::findOrFail($id);
        return redirect('curso')->with('mensaje','El curso ha sido modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso=Curso::findOrFail($id);
        Curso::destroy($id);
        return redirect('curso')->with('mensaje','El curso ha sido eliminado exitosamente.');
    }
}
