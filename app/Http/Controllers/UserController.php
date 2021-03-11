<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        //DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['fasoxy', 'fasoxy@gmail.com', 'password']);
        //$users = DB::select('select * from users');
        //return $users;
        //DB::update('update users set name = ? where id = 1', ['Mattia']);
        //$users = DB::select('select * from users');
        //return $users;
        //DB::delete('delete from users where id = 1');
        //$users = DB::select('select * from users');
        //return $users;

        //$user = new User();
        //var_dump($user);
        //dd($user);
        //$user->name = 'Mattia';
        //$user->email = 'fasoxy@gmail.com';
        //$user->password = 'password';
        //$user->save();

        $user = User::all();
        return $user;

        return view('home');
    }
}
