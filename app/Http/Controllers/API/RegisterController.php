<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'same:email-confirm', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:password-confirm'],
        ]);
        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $user =   User::create([
            'firstname' => $request->input('firstname'),
            'role_id' => 2,
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        // $token =  $user->createToken('MyAuthApp')->plainTextToken;

        $response = [
            'user' => $user,
            // 'token' => $token,
        ];
        return response($response,200);
    }
}
