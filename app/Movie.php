<?php

namespace Cinema;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
    protected $table    = 'movies';
    protected $fillable = [
        'name', "path", "cast", "direction", "duration", "genre_id",
    ];
    //creamos un mutador q es para modificar un elemento antes de ser guardado
    public function setPathAttribute($path) {

        //$this->attributes["path"] asemos referencia a el atributo path
        // Carbon::now()->second es para obtener los segundos actuales
        //concadenamos luego el nombre del archivo q estamos resiviendo con $path->getClientOriginalName()
        $this->attributes["path"] = Carbon::now()->second . $path->getClientOriginalName();

        //nombre del archivo va a ser lo mismo
        $name = Carbon::now()->second . $path->getClientOriginalName();

        //para subir un archivo se hace con la clase \Storage::disk("local")
        //y con el metodo put almasenamos el archivo, resive el nombre y el archivo q vamos a subir
        //en este caso entramos a la clase \File::get() y le accinamos la ruta de nuestro archivo
        \Storage::disk("local")->put($name, \File::get($path));
    }

    public static function Movies() {
        //utilizamos un query con la clase q nos proporciona laravel
        //en el cual selecionamos la tabla movies
        //hacemos un join q nos diga q la tabla genres.id de la tabla genres sea igual a el movies.genre_id de la tabla movies
        //despues q nos selecione todos los campos de la tabla movies y de la tabla genres su genres.genre
        //y por ultimos q nos obtenga la consulta
        return DB::table("movies")
            ->join("genres", "genres.id", "=", "movies.genre_id")
            ->select("movies.*", "genres.genre")
            ->get();
    }
}
