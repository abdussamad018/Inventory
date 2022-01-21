<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function UserRole()
    {
        $role = UserRole::all();
        return view('adduserRole', compact('role'));
    }

    public function AddUserRole(Request $request)
    {
        $role = $request->Role_name;
        $exrole = UserRole::where('Role_name', '=', $role)->count();
        if ($exrole == 1) {
            return "<script>alert('Already Exits');window.location='UserRole'</script>";
        } else {
            $data = $request->all();
            UserRole::create($data);
            return redirect()->back();
        }

    }

    public function user()
    {
        $role=UserRole::all();
        return view('adduser',compact('role'));
    }

    public function adduser(Request $request)
    {
        $user = $request->User_name;
        $email = $request->Email;
        $num = Users::where('User_name', '=', $user)->where('Email', '=', $email)->count();
        if ($num == 1) {
            return "<script>alert('Already Exits');window.location='user'</script>";
        } else {
            $data = $request->all();
            Users::create($data);
            return redirect('manageUser');
        }
    }

    public function manageUser()
    {   $data=Users::all();
        return view('manageuser',compact('data'));

    }
}
