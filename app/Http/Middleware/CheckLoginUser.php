<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;

class CheckLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $this->getSessionUserAdmin();
        $id = $this->getSessionIdAdmin();
        if ($id <= 0 || $user == '') {
            return redirect()->route('login');
        }
        return $next($request);
    }

    private function getSessionUser()
    {
        $name = Session::get('nameUser');
        return $name;
    }

    private function getSessionIdUser()
    {
        $id = Session::get('idUser');
        $id = is_numeric($id) ? $id : 0;
        return $id;
    }

    private function getSessionEmailUser()
    {
        $email = Session::get('emailUser');
        return $email;
    }
}
