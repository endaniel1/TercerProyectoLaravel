<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use \Cinema\Genre;
use \Cinema\Movie;

class MovieController extends Controller {

    public function __construct() {
        $this->middleware("admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $movies = Movie::Movies();
        //return $movies;
        return view("movie.index")->with("movies", $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $generos = Genre::pluck("genre", "id");
        return view("movie.create")->with("generos", $generos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $movie = new Movie($request->all());
        //Movie::create($request->all());
        $movie->save();
        return redirect("movie")->with("mensaje", "Creada")->with("movie", $movie);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
