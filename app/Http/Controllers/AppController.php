<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('app.home');
    }

    public function show() {
        return view('app.show');
    }
}
