<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfermedad;
class EnfermedadController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Enfermedades = Enfermedads::paginate(5);
        return view('enfermedades.index',compact('Enfermedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfermedades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $enfermedad = new Enfermedad;
       $enfermedad->name= $request->descripcion;
       $enfermedad->save();
       return redirect()->route('enfermedades.index')->with('datos','registro guardado correctamente');
        //
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
        $enfermedades = Enfermedads::findOrFail($id);
        return view('enfermedades.edit',compact('enfermedades'));
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
        $Enfermedad = Enfermedads::findOrFail($id);
        $Enfermedad->name= $request->descripcion;
        $Enfermedad->save();
        return redirect()->route('enfermedades.index')->with('datos','registro actualisado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Enfermedad = Enfermedads::findOrFail($id);
        $Enfermedad->delete();
        return redirect()->route('enfermedades.index')->with('datos','registro eliminado correctamente');
    }

    public function confirm($id){
        $Enfermedad = Enfermedads::findOrFail($id);
        return view('enfermedades.confirm',compact('Enfermedad'));
    }
}
