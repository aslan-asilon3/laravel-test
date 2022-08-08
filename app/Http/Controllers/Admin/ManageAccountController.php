<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageAccountController extends Controller
{

    public function ajaxuser(Request $request)
    {
        $data_user = UnicharmMember::select('id','id_user', 'image', 'name', 'email', 'password', 'level', 'phone', 'address');
        //var_dump(json_encode($request->id_user));exit();

        if (!empty($request->id_user)) {
            //dd($request->id_user);
            $data_member->where('id_user', $request->id_user);
        }

        if (!empty($request->image)) {
            //dd($request->id_user);
            $data_user->where('image', $request->image);
        }

        if (!empty($request->name)) {
            $data_user->where('name', $request->name);
        }

        if (!empty($request->email)) {
            $data_user->where('email', $request->email);
        }

        if (!empty($request->password)) {
            $data_user->where('password', $request->password);
        }

        if (!empty($request->level)) {
            $data_user->where('level', $request->level);
        }

        if (!empty($request->phone)) {
            $data_user->where('phone', $request->phone);
        }

        if (!empty($request->address)) {
            $data_user->where('address', $request->address);
        }

        $data_user->orderBy('id', 'ASC');

        $datatables = User::datatables($data_user);

        return $datatables;
    }

}
