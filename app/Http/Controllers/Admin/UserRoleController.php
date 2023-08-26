<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User_Role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function create(){
        return view('admin.user_role.create');
    }

    public function store(Request $request){
            $data = new User_Role();

            $data->title = $request->title;
            $data->save();
            return redirect()->back();
    }

    public function view(){
        $alldata = User_Role::all();

    }
}
