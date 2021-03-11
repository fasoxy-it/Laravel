<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['fasoxy', 'fasoxy@gmail.com', 'password']);
        return view('home');
    }
}
