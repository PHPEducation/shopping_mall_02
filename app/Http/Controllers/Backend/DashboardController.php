<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Account;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [];
        $id = Session::get('idAdmin');
        $id = is_numeric($id) ? $id : 0;
        $infoAdmin = Account::find($id);
        if (isset($infoAdmin->id)) {
            $data['info'] = $infoAdmin;

            return view('admin.dashboard.index', $data);
        } else {
            return view('admin.notfound');
        }
    }

    public function update(Request $request)
    {
        $id = Session::get('idAdmin');
        $id = is_numeric($id) ? $id : 0;
        $data = $request->except('_token');
        $data['password'] = md5($request->password);
        $data['updated_at'] = date('Y-m-d H:i:s');
        $result = Account::find($id)->update($data);
        if ($result) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.dashboard.edit', ['state' => 'err']);
        }
    }
}
