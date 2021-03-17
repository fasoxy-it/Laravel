<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

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
        if(!$request->title) {
            return redirect()->back()->with('error', 'Please Insert ToDo');
        }
        ToDo::create($request->all());
        return redirect()->back()->with('message', 'ToDo Created Successfully');
    }

    public function edit() {
        return view('todos.edit');
    }
}
