<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use \Cinema\Genre;
use \Cinema\Http\Requests\RequestGenero;

class GeneroController extends Controller {

    public function listaGenero() {
        $generos = Genre::all();
        return response()->json(

            $generos->toArray()

        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("genero.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("genero.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestGenero $request) {
        //esto lo q hace es referencia a si viene una petision por el metodo ajax
        if ($request->ajax()) {

            $genero = new Genre($request->all());
            $genero->save();
            //aqui lo q hacemos es devolver una respuesta o mensaje en json
            return response()->json([
                "mensaje" => "Regisro correcto",
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $genero = Genre::find($id);
        return response()->json(
            $genero->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $genero = Genre::find($id);
        $genero->fill($request->all());
        $genero->save();
        return response()->json([
            "mensaje" => "Regisro Correcto",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        if ($request->ajax()) {
            $genero = Genre::find($id);
            $genero->delete();
            return response()->json([
                "mensaje" => "Se Elimino Correctamente",
            ]);
        }

    }
}
