<?php

namespace App\Http\Controllers\incubation;

use App\Models\incubation\LoginModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncubationController extends Controller
{
    public function login(){
        return view('pages/login');
    }

    public function userlogin(Request $request)
    {
        $login_data = [
            'name' => $request->username,
            'password' => $request->password,
            'created_by' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
        ];
        // dd($login_data);
        LoginModel::create($login_data);
        
        return redirect()->away('/pages/admindashboard');
    }
}
