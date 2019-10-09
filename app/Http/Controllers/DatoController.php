<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;

class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Dato::all()->toArray();
        return view('dato.index', compact('datos'));
    }


    public function inicio()
    {
        return view('inicio');
    }

    public function propiedad()
    {
        return view('propiedad');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'domicilio'    =>  'required',
            'ciudad'     =>  'required'
        ]);
        $dato = new Dato([
            'domicilio'    =>  $request->get('domicilio'),
            'numero'     =>  $request->get('numero'),
            'colonia'    =>  $request->get('colonia'),
            'ciudad'     =>  $request->get('ciudad'),
            'estado'    =>  $request->get('estado'),
            'cp'     =>  $request->get('cp'),
            'precio'    =>  $request->get('precio'),
            'area'     =>  $request->get('area'),
            'camas'    =>  $request->get('camas'),
            'cuartos'     =>  $request->get('cuartos'),
            'baños'    =>  $request->get('baños')
        ]);
        $dato->save();
        return redirect()->route('dato.index')->with('success', 'Propiedad agregada con exito');
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
        $dato = Dato::find($id);
        return view('dato.edit', compact('dato', 'id'));
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
        $this->validate($request, [
            'domicilio'    =>  'required',
            'numero'     =>  'required',
            'colonia'    =>  'required',
            'ciudad'     =>  'required',
            'estado'    =>  'required',
            'cp'     =>  'required',
            'precio'    =>  'required',
            'area'     =>  'required',
            'camas'    =>  'required',
            'cuartos'     =>  'required',
            'baños'    =>  'required'
        ]);
        $datos = Dato::find($id);
        $datos->domicilio = $request->get('domicilio');
        $datos->numero = $request->get('numero');
        $datos->colonia = $request->get('colonia');
        $datos->ciudad = $request->get('ciudad');
        $datos->estado = $request->get('estado');
        $datos->cp = $request->get('cp');
        $datos->precio = $request->get('precio');
        $datos->area = $request->get('area');
        $datos->camas = $request->get('camas');
        $datos->cuartos = $request->get('cuartos');
        $datos->baños = $request->get('baños');
        $datos->save();
        return redirect()->route('dato.index')->with('success', 'Propiedad actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Dato::find($id);
        $dato->delete();
        return redirect()->route('dato.index')->with('success', 'Propiedad eliminada');
    }
}
