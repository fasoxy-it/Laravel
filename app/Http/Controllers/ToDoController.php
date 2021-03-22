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
        $todos = ToDo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }

    public function create() {
        return view('todos.create');
    }

    public function store(ToDoCreateRequest $request) {
        ToDo::create($request->all());
        return redirect()->back()->with('message', 'ToDo Created Successfully.');
    }

    public function edit(ToDo $todo) {
        return view('todos.edit', compact('todo'));
    }

    public function update(ToDoCreateRequest $request, ToDo $todo) {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated!');
    }

    public function complete(ToDo $todo) {
        $todo->update(['completed' => true]);
        return redirect()->back()->with('message', 'ToDo Completed!');
    }

    public function incomplete(ToDo $todo) {
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'ToDo Incompleted!');
    }

    public function delete(ToDo $todo) {
        $todo->delete();
        return redirect()->back()->with('message', 'ToDo Deleted!');
    }
}
