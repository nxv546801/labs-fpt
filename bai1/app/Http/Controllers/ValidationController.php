<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ValidationController extends Controller
{
    public function create(){
    	return view('login');
    }

    public function store(Request $request){
    	$request->validate(
            [
        		'email' => 'required|email',
        		'password' => 'required|min:6'
    	    ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute chưa đúng định dạng',
                'min' => ':attribute phải ít nhất là :min kí tự',
            ],
            [
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );
    	return redirect('/home/')->with('email', 'nxv109@gmail.com');
    }
}
