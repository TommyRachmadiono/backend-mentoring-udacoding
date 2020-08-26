<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AuthMobileController extends Controller
{
    public function loginMobile(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            return response()->json([
                'msg' => 'Login success',
                'value' => 1,
                'user' => Auth::user(),
            ], 200);
        }

        return response()->json([
            'msg' => 'Email / Password salah',
            'value' => 0,
            'email' => $request->email,
            'password' => $request->password,
        ], 401);
    }

    public function registerMobile(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'value' => 0,
                'error' => $validator->errors(),
            ], 200);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        if ($user) {
            return response()->json([
                'msg' => 'Register success',
                'value' => 1,
                'user' => $user,
            ], 200);
        }
    }
}
