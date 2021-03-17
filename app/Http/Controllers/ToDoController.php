<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class ToDoController extends Controller
{
    public function index() {
        return view('todos.index');
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {
        //$request->validate([
        //    'title' => 'required|max:255'
        //]);
        $rules = [
            'title' => 'required|max:255'
        ];
        $messages = [
            'title.max' => 'ToDo should not be greater than 255 characters'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        ToDo::create($request->all());
        return redirect()->back()->with('message', 'ToDo Created Successfully');
    }
    
    public function edit() {
        return view('todos.edit');
    }
}
