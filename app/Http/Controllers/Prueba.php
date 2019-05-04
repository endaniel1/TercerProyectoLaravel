<?php

namespace Cinema\Http\Controllers;

class Prueba extends Controller {
    public function index() {
        return "Hola desdes un controlador";
    }
    public function nombre($nombre) {
        return "Hola el nombre es: " . $nombre;
    }
}
