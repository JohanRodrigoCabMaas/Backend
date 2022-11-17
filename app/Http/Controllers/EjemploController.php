<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GuardarEjemploRequest;
use App\Http\Requests\ActualizarEjemploRequest;
use App\Models\Ejemplo;
class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ejemplo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEjemploRequest $request)
    {
        Ejemplo::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Ejemplo Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ejemplo $ejemplo)
    {
        return response()->json([
            'res'=>true,
            'ejemplo'=>$ejemplo
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarEjemploRequest $request, Ejemplo $ejemplo)
    {
        $ejemplo->update($request->all());
        return response()->json([
            'res'=> true,
            'mensaje'=>'Usuario Actualizado Correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejemplo $ejemplo)
    {
        $ejemplo->delete();
        return response()->json([
            'res'=> true,
            'mensaje'=>'Usuario Eliminado Correctamente'
        ],200);
    }
}
