<?php

namespace Cinema\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class admin {

    protected $auth;
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ($this->auth->user()->id > "1") {

            return redirect("admin")->with("mensaje", "Accesso No Permitido");
        }
        return $next($request);
    }
}
