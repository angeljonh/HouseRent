<?php

namespace App\Http\Controllers;

use App\Propiedad;
use App\Zona;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{

    public function index()
    {
        $propiedades = Propiedad::all();
        return view('propiedades.propiedadIndex', compact('propiedades'));
    }


    public function inicio()
    {
        return view('inicio');
    }

    public function inicioo()
    {
        return view('inicioo');
    }

    public function acerca()
    {
        return view('acerca');
    }

    public function propiedad()
    {
        return view('propiedad');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function blog()
    {
        return view('blog');
    }

    public function create()
    {
        $zonas = Zona::pluck('zona' , 'zona');
        return view('propiedades.propiedadForm', compact('zonas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'domicilio' => 'required|min:1|max:100',
            'numero' => 'required|min:1|max:10',
            'zona' => 'required|min:1|max:10',
            'precio' => 'required|min:1|max:255',
            'area' => 'required|min:1|max:100',
            'camas' => 'required|min:1|max:20',
            'baños' => 'required|min:1|max:20',
        ]);
        Propiedad::create($request->all());
        return redirect()->route('propiedad.index');
    }


    public function show(Propiedad $propiedad)
    {
        return view('propiedades.propiedadShow', compact('propiedad'));
    }


    public function edit(Propiedad $propiedad)
    {
        return view('propiedades.propiedadForm', compact('propiedad'));
    }


    public function update(Request $request, Propiedad $propiedad)
    {
        $request->validate([
            'domicilio' => 'required|min:1|max:100',
            'numero' => 'required|min:1|max:10',
            'zona' => 'required|min:1|max:100',
            'cp' => 'required|min:1|max:5',
            'precio' => 'required|min:1|max:255',
            'area' => 'required|min:1|max:100',
            'camas' => 'required|min:1|max:20',
            'baños' => 'required|min:1|max:20',
        ]);

        $propiedad->domicilio = $request->domicilio;
        $propiedad->numero = $request->numero;
        $propiedad->zona_id = $request->zona;
        $propiedad->cp = $request->cp;
        $propiedad->precio = $request->precio;
        $propiedad->area = $request->area;
        $propiedad->camas = $request->camas;
        $propiedad->cuartos = $request->cuartos;
        $propiedad->baños = $request->baños;
        $propiedad->save();

        return redirect()->route('propiedad.show', $propiedad->id);
    }

    public function destroy(propiedad $propiedad)
    {
        $propiedad->delete();
        return redirect()->route('propiedad.index');
    }
}
