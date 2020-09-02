<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad;
class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Localidad = Localidad::paginate(5);
     //   dd($Localidad);
        return view('localidades.index',compact('Localidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('localidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Localidad = new Localidad;
        $Localidad->name = $request->descripcion;
        $Localidad->save();
        return redirect()->route('localidad.index')->with('datosLocalidad','localidad creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Localidad = Localidad::findOrFail($id);
        return view('localidades.edit',compact('Localidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $Localidad = Localidad::findOrFail($id);
       $Localidad->name = $request->descripcion;
       $Localidad->save();
       return redirect()->route('localidad.index')->with('datosLocalidad','registro modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Localidad = Localidad::findOrFail($id);
        $Localidad->delete();
        return redirect()->route('localidad.index')->with('datos','Localidad eliminada correctamente');
    }

    public function confirm($id){
        $Localidad = Localidad::findOrFail($id);
        return view('localidades.confirm',compact('Localidad'));
    }
}
