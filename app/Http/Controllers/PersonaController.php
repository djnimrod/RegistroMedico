<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Persona = Persona::paginate(5);
        return view('personas.index', compact('Persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
       $persona = new Persona;
       $persona->nombres= $request->nombres;
       $persona->apellidos= $request->apellidos;
       $persona->sexo= $request->sexo;
       $persona->telefono= $request->telefono;
       $persona->fechaNacimiento= $request->fechaNacimiento;
       $persona->save();
       return redirect()->route('persona.index')->with('datosPersona','registro guardado correctamente');
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
        //
        $Persona = Persona::findOrFail($id);
        //dd($Persona);
        return view('personas.edit',compact('Persona'));
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
        //
       $Persona = Persona::findOrFail($id);
       $Persona->nombres= $request->nombres;
       $Persona->apellidos= $request->apellidos;
       $Persona->sexo= $request->sexo;
       $Persona->telefono= $request->telefono;
       $Persona->fechaNacimiento= $request->fechaNacimiento;
       $Persona->save();
       return redirect()->route('persona.index')->with('datosPersona','Persona modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
