<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uv;

class UvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Uv = Uv::paginate(5);
        return view('Uv.index',compact('Uv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Uv = new Uv;
        $Uv->name = $request->descripcion;
        $Uv->save();
        return redirect()->route('uv.index')->with('datosuv','registro creado exitosamente');
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
        $Uv = Uv::findOrFail($id);
        return view('uv.edit',compact('Uv'));
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
        $Uv = Uv::findOrFail($id);
        $Uv->name= $request->descripcion;
        $Uv->save();
        return redirect()->route('uv.index')->with('datosuv','registro modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Uv = Uv::findOrFail($id);
        $Uv->delete();
        return redirect()->route('uv.index')->with('datosuv','registro eliminado correctamente');
    }

    public function confirm($id){
        $Uv = Uv::findOrFail($id);
        return view('uv.confirm',compact('Uv'));
    }
}
