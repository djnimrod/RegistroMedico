<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sintoma;

class SintomaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sintoma = Sintoma::paginate(5);
        return view('sintomas.index',compact('Sintoma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sintomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $sintoma = new Sintoma;
       $sintoma->name= $request->descripcion;
       $sintoma->save();
       return redirect()->route('sintoma.index')->with('datos','registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sintoma = Sintoma::findOrFail($id);
        return view('sintomas.show',compact('Sintoma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Sintoma = Sintoma::findOrFail($id);
        return view('sintomas.edit',compact('Sintoma'));
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
        $Sintoma = Sintoma::findOrFail($id);
        $Sintoma->name= $request->descripcion;
        $Sintoma->save();
        return redirect()->route('sintoma.index')->with('datos','registro modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sintoma = Sintoma::findOrFail($id);
        $Sintoma->delete();
        return redirect()->route('sintoma.index')->with('datos','registro eliminado correctamente');
    }

    public function confirm($id){
        $Sintoma = Sintoma::findOrFail($id);
        return view('sintomas.confirm',compact('Sintoma'));
    }
}
