<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use \Cinema\Http\Requests\RequestCreateUser;
use \Cinema\Http\Requests\RequestUpdateUser;
use \Cinema\User;

class UsuarioController extends Controller {

    public function __construct() {
        $this->middleware("admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $usuarios = User::orderBy("id", "ASC")->paginate(3);
        if ($request->ajax()) {
            return response()->json(

                view("usuario.users")->with("usuarios", $usuarios)->render()

            );
        }
        return view("usuario.index")->with("usuarios", $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCreateUser $request) {

        $user           = new User($request->all());
        $user->password = bcrypt($request->password);
        //dd($user);
        $user->save();
        return redirect("usuario")->with("mensaje", "Creado")->with("user", $user);
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

        $usuario = User::find($id);

        return view("usuario.edit")->with("usuario", $usuario);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateUser $request, $id) {

        $user = User::find($id);

        $user->fill($request->all());

        $user->save();

        return redirect("usuario")->with("mensaje", "Actualizado")->with("user", $user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::find($id);
        $user->forcedelete(); //ahora en vez de eliminarlo de forma permanente no se va a eliminar de la base de datos pero permandece en un estado de no se va a mostrar en las consultas esto varia a la clase SoftDeletes del modelo
        return redirect("usuario")->with("mensaje", "Eliminado")->with("user", $user);
    }
}
