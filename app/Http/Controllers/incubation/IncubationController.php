<?php

namespace App\Http\Controllers\incubation;
use App\Models\incubation\LoginModel;
use App\Models\incubation\MentorsModel;
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
        return redirect()->route('pages/admindashboard');
    }

    public function admindashboard(){
        return view ('pages/admindashboard');
    }

    public function mentors(){
        return view ('pages/mentors');
    }

    public function mentorsadd(Request $request)
    {
        $mentors_data = [
            'name'          => $request->name,
            'contact_no'    => $request->contact_no,
            'email'         => $request->email,
            'description'   => $request->description,
            'pro_pic'       => $request->profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        MentorsModel::create($mentors_data);
        return redirect()->route('pages/admindashboard');
    }
    
}

