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
    	$this->validate($request,
            [
        		'username' => 'required',
                'email' => 'required|email',
        		'password' => 'required|min:6',
                'phone' => 'required|max:11|in_phone',
                'dateofbirth' => 'required|ss'
    	    ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute chưa đúng định dạng',
                'min' => ':attribute phải ít nhất là :min kí tự',
                'max' => ':attribute phải là :max kí tự or 10',
            ],
            [
                'username' => 'Username',
                'email' => 'Email',
                'password' => 'Password',
                'phone' => 'Phone number'
            ]
        );
    	return redirect('/home/')->with(['username' => $request->username]);
    }
}
