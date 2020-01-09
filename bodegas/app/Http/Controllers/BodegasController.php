<?php

namespace App\Http\Controllers;

use App\Bodega;
use Illuminate\Http\Request;

class BodegasController extends Controller
{
    //
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas', ['bodegas' => $bodegas]);
    }

    public function show($id)
    {
        $bodegas = Bodega::find($id);
        $vinos_bodega = $bodegas->vinos;
        return view('detallebodega', ['bodegas' => $bodegas], ['vinos' => $vinos_bodega]);
    }

    public function delete($id)
    {
        Bodega::destroy($id);
        $bodegas = Bodega::all();
        return view('bodegas', ['bodegas' => $bodegas]);
    }

    public function create()
    {
        return view('crearbodega');
    }

    public function store(Request $request)
    {
        // Validate the Article

        // Create the article
        $bodega = new Bodega();

        $bodega->nombre = request('nombre');
        $bodega->localizacion = request('localizacion');
        $bodega->telefono = request('telefono');
        $bodega->email = request('email');
        $bodega->persona_contacto = request('persona_contacto');
        $bodega->ano_fundacion = request('ano_fundacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        return redirect('/bodegas');
    }

    public function edit($id)
    {
        $bodegas = Bodega::find($id);

        $vinos_bodega = $bodegas->vinos;

        return view('detallebodega', ['bodegas' => $bodegas], ['vinos' => $vinos_bodega]);
    }

    public function update(Request $request, $id)
    {

        // Create the article
        $bodega = Bodega::find($id);

        $bodega->nombre = request('nombre');
        $bodega->localizacion = request('localizacion');
        $bodega->telefono = request('telefono');
        $bodega->email = request('email');
        $bodega->persona_contacto = request('persona_contacto');
        $bodega->ano_fundacion = request('ano_fundacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        return redirect('/bodegas/' . $id);

    }


}
