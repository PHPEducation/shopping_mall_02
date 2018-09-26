<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;

class CheckLoginAdmin
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
            return redirect()->route('admin.login');
        }
        return $next($request);
    }

    private function getSessionUserAdmin()
    {
        $name = Session::get('nameAdmin');
        return $name;
    }

    private function getSessionIdAdmin()
    {
        $id = Session::get('idAdmin');
        $id = is_numeric($id) ? $id : 0;
        return $id;
    }
    
    private function getSessionEmailAdmin()
    {
        $email = Session::get('emailAdmin');
        return $email;
    }
}
