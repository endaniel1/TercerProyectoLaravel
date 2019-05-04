<?php

namespace Cinema\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LogController extends Controller {

    public function __construct() {
        $this->middleware("guest", ["only" => "index"]);
    }

    public function index() {
        return redirect("/");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login() {

        $credenciales = $this->validate(request(), [
            $this->username() => ["min:4", "max:120", "required"],
            "password"        => ["min:4", "max:10", "required"],
        ]);
        //con el metodo validate validamos los campor q biene del formulario
        //dd($credenciales);
        if (Auth::attempt($credenciales)) {

            return redirect("admin");

        } else {

            return back()
                ->withErrors([$this->username() => trans("auth.failed")])
                ->withInput(request([$this->username()]));

        }

    }

    public function logout() {
        Auth::logout();
        return redirect("/");
    }

    public function username() {
        return "name";
    }
}
