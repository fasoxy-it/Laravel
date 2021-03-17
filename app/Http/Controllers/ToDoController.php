<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoCreateRequest;
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

    public function store(ToDoCreateRequest $request) {
        ToDo::create($request->all());
        return redirect()->back()->with('message', 'ToDo Created Successfully.');
    }

    public function edit() {
        return view('todos.edit');
    }
}
