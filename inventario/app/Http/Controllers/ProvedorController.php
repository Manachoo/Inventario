<?php

namespace App\Http\Controllers;
use App\Models\Provedor;

use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    public function index()
    {
        $provedores = provedor::all();
        return view('provedor.index')->with('provedor', $provedores);
    }

    public function create()
    {
        return view('provedores.create');
    }

    public function store(Request $request)
    {
        $provedor = new provedor();
        $provedor->nombre = $request->get('nombre');
        $provedor->direccion = $request->get('direccion');
        $provedor->telefono = $request->get('telefono');
        $provedor->email = $request->get('email');
        $provedor->save();

        return redirect('/provedores');
    }

    public function edit($id)
    {
        $provedor = provedor::find($id);
        return view('provedores.edit')->with('provedor', $provedor);
    }

    public function update(Request $request, $id)
    {
        $provedor = provedor::find($id);
        $provedor->nombre = $request->get('nombre');
        $provedor->direccion = $request->get('direccion');
        $provedor->telefono = $request->get('telefono');
        $provedor->email = $request->get('email');
        $provedor->save();

        return redirect('/provedores');
    }

    public function destroy($id)
    {
        $provedor = provedor::find($id);
        $provedor->delete();

        return redirect('/provedores');
    }

    public function show($id)
    {
        $provedor = provedor::find($id);
        return view('provedores.show')->with('provedor', $provedor);
    }
}
