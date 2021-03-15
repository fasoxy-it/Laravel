<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;

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
        //$user->password = bcrypt('password');
        //$user->save();

        //$user = User::all();
        //return $user;

        //User::where('id', 3)->delete();

        //User::where('id', 4)->update(['name'=>'fasoxy']);
        //$user = User::all();
        //return $user;

        //$data = [
        //    'name' => 'Simone',
        //    'email' => 'fasoxx@gmail.com',
        //    'password' => 'password'
        //];

        //User::create($data);

        $user = User::all();
        return $user;

        return view('home');
    }

    public function uploadAvatar(Request $request) {
        if($request->hasFile('image')) {
            dd($request->image->getClientOriginalName());
        }
        //$request->image->store('images', 'public');
        User::find(1)->update(['avatar'=>'something']);
        return 'Image Uploaded';
    }
}
