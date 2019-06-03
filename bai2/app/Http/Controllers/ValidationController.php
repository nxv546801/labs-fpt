<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ValidationController extends Controller
{
    public function create(){
    	return view('phone');
    }

    public function store(Request $request){
    	$this->validate($request,
            [
        		'phone' => 'required|in_phone',
    	    ],
            [
                'required' => ':attribute không được để trống',
                'phone' => ':attribute chưa đúng định dạng',
                'min' => ':attribute phải ít nhất là :min kí tự',
            ],
            [
                'phone' => 'Phone number',
                'password' => 'Mật khẩu'
            ]
        );
    	return redirect('/home/')->with(['phone'=>'Your phone number: '.$request->phone, 'alertMessage'=>'success']);;
    }
}
