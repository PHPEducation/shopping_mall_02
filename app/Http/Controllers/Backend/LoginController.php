<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Account;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginController extends Authenticatable
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function handleLogin(Request $request, Account $admin)
    {
        $user = $request->txtUser;
        $pass = $request->txtPass;
        if ($user == '' || $pass == '') {
            return redirect()->route('admin.login', ['state' => 'fail']);
        } else {
            Auth::user();
            $infoAdmin = $admin->checkLoginAdmin($user, md5($pass));
            if (isset($infoAdmin->id) && $infoAdmin->id > 0) {
                $request->session()->put('idAdmin', $infoAdmin->id);
                $request->session()->put('nameAdmin', $infoAdmin->name);
                $request->session()->put('emailAdmin', $infoAdmin->email);
                $request->session()->put('roleAdmin', $infoAdmin->role);
                
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login', ['state' => 'err']);
            }
        }
    }
    
    public function logout(Request $request)
    {
        $request->session()->forget('idAdmin');
        $request->session()->forget('nameAdmin');
        $request->session()->forget('emailAdmin');
        $request->session()->forget('roleAdmin');

        return redirect()->route('admin.login');
    }
}
