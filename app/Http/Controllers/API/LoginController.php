<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }
        $recuperation = DB::select('select role_id  from users where email=?', [$request->input('email')]);
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => "Vos identifiants sont incorrects"], 401);
        } elseif ($recuperation[0]->role_id !== 2) {
            return response()->json(['error' => "Vous n'êtes pas autorisé à vous connecter"], 401);
        }
        $token = auth()->user()->createToken('auth_token');
        return response()->json([
            'auth_token' => $token->plainTextToken,
            'user' => auth()->user()
        ]);
    }
}
