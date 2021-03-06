<?php

namespace App\Http\Controllers;

use App\Books;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $books = Books::all();
        $users = User::all();
        $articles = Books::all();
        return view('layouts.Admin',compact('books','users','articles'));
    }
    public function master(){
        $books = Books::all();
        $users = User::all();
        $articles = Books::all();
        return view('layouts.master',compact('books','users','articles'));
    }
}