<?php

namespace App\Http\Controllers;

use App\Vino;
use App\Bodega;

use Illuminate\Http\Request;

class VinosController extends Controller
{
    //

    public function index()
    {

        $vinos = Vino::all();
        return view('vinos', ['vinos' => $vinos]);
    }

    public function delete($id)
    {
        Vino::destroy($id);

        $bodegas = Bodega::find($id);

        return view('detallebodega', ['bodegas' => $bodegas]);

    }


    public function show($id)
    {
        $vinos = Vino::find($id);

        return view('detallevino', ['vinos' => $vinos]);
    }


    public function create($id)
    {
        return view('crearvino', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        // Validate the Article

        // Create the article
        $vino = new Vino();
        $vino->bodega_id = $id;
        $vino->nombre = request('nombre');
        $vino->descripcion = request('descripcion');
        $vino->ano = request('ano');
        $vino->alcohol = request('alcohol');
        $vino->tipo = request('tipo');


        $vino->save();

        return redirect('/bodegas/' . $id);
    }

    public function edit($id)
    {
        $vinos = Vino::find($id);
        return view('detallevino', ['vinos' => $vinos], ['id' => $id]);
    }

    public function update(Request $request, $id)
    {

        // Create the article
        $vinos = Vino::find($id);

        $vinos->nombre = request('nombre');
        $vinos->descripcion = request('descripcion');
        $vinos->ano = request('ano');
        $vinos->alcohol = request('alcohol');
        $vinos->tipo = request('tipo');

        $vinos->save();

        return redirect('/bodegas/' . $vinos->bodega_id);

    }


}
