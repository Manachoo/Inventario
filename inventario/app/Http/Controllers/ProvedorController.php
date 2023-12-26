<?php

namespace App\Http\Controllers;
use App\Models\provedorees;

use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    public function index()
    {
        $provedores = provedorees::all();
        return view('provedores.index')->with('provedores', $provedores);
    }

    public function create()
    {
        return view('provedores.create');
    }

    public function store(Request $request)
    {
        $provedor = new provedorees();
        $provedor->nombre = $request->get('nombre');
        $provedor->direccion = $request->get('direccion');
        $provedor->telefono = $request->get('telefono');
        $provedor->email = $request->get('email');
        $provedor->save();

        return redirect('/provedores');
    }

    public function edit($id)
    {
        $provedor = provedorees::find($id);
        return view('provedores.edit')->with('provedor', $provedor);
    }

    public function update(Request $request, $id)
    {
        $provedor = provedorees::find($id);
        $provedor->nombre = $request->get('nombre');
        $provedor->direccion = $request->get('direccion');
        $provedor->telefono = $request->get('telefono');
        $provedor->email = $request->get('email');
        $provedor->save();

        return redirect('/provedores');
    }

    public function destroy($id)
    {
        $provedor = provedorees::find($id);
        $provedor->delete();

        return redirect('/provedores');
    }

    public function show($id)
    {
        $provedor = provedorees::find($id);
        return view('provedores.show')->with('provedor', $provedor);
    }
}
