<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phoneverifie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SSOController;
use App\Http\Traits\ImageUploadTrait;

class LoginController extends Controller
{

    use ImageUploadTrait;

    /**
     * send otp api
     * send OTP on user phone number
     */

    public function sendOtp(Request $request){
        $validator = Validator::make($request->all(), [ 
            'phone' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $user = Phoneverifie::updateOrCreate(['phone' => $request->phone], [ 
            'otp' => '000000'
        ]);
        if(!empty($user)){
            return response()->json(['success' => '1','messgae' => 'OTP sent on your phone number'],200);
        }
        return response()->json(['success' => '0','message' => 'Please try after some time'],401);
    }

    
    /**
     * verify OTP
     * if user register then redirect home screen
     * else user create profile
    */
    public function verifyOtp(Request $request){
        $validator = Validator::make($request->all(), [ 
            'phone' => 'required', 
            'otp' => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        if (Phoneverifie::where('phone', '=', $request->phone)->where('otp', '=', $request->otp)->exists()) {
            $data = [
                'email' => $request->phone."@gmail.com",
                'password' => 'admin' 
            ];
            if (auth()->attempt($data)) {
                $userInfo = auth()->user()->only(['id', 'name','phone']);
                $response = SSOController::getTokenAndRefreshToken($request);
                $userInfo['tokenType'] = $response->token_type;
                $userInfo['accessToken'] = $response->access_token;
                $userInfo['refreshToken'] = $response->refresh_token;
                return response()->json(['success' => '1','message' => 'User Login successfully','details' => $userInfo], 200);
            } else {
                return response()->json(['success' => '2','message' => 'Please create your account'], 200);
            }
        }
        return response()->json(['error' => 'Invalid OTP! Please enter valid OTP'], 401);
    }

    /**
     * Register api
     * create new account for application user
     */

     public function register(Request $request){
        $validator = Validator::make($request->all(), [ 
            'phone' => 'required', 
            'name' => 'required',
            'reg_id' => 'required', 
            'device_type' => 'required',  
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $ins = $request->input();
        if($request->hasFile('image')){
            $ins['image'] = $this->imageUpload($request->file('image'),'userImage');
        }
        $ins['email'] = $request->phone.'@gmail.com';
        $ins['password'] = bcrypt('admin');
        $insert = User::create($ins);
        if(!empty($insert)){

        }
        return response()->json(['error' => 'Please try after some time'], 401);

     }
}
