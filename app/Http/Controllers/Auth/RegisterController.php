<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::CONFIRMATION;
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'same:email-confirm', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:password-confirm'],
        ]);
        User::create([
            'firstname' => $request->input('firstname'),
            'role_id' => 2,
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->back()->with('success', 'Votre enregistrement a été un succès');
        // $request->session()->put([
        //     'confirmation_data_exist' => true,
        //     'title' => "Votre inscription a été un succcès:)",
        //     'body' => [
        //         0 => "Nous venons de vous envoyer un mail de confirmation.",
        //         1 => "Vueillez consulter votre boite mail puis cliquer sur le lien pour verifier votre e-mail."
        //     ],
        // ]);

        // return redirect()->intended($this->redirectTo);

    }
}
