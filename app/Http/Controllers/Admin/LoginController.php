<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function signIn(LoginRequest $request){
        if(auth()->attempt(array('email' => $request->input('email'), 'password' =>$request->input('password')))){
            if (auth()->user()->is_admin == 1) {
                return redirect()->back()->withErrors(['successMess' => 'Snap! you are done!']);
            }else{
                return redirect()->back()->withErrors(['notInMess' => 'Snap! you are done!']);
            }
        }else{
            return redirect()->back()->withErrors(['errorMess' => 'Snap! you are done!']);
        }
    }
}
