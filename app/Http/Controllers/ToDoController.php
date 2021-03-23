<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoCreateRequest;
use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class ToDoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }

    public function create() {
        return view('todos.create');
    }

    public function show(ToDo $todo) {
        return view('todos.show', compact('todo'));
    }

    public function store(ToDoCreateRequest $request) {
        $todo = auth()->user()->todos()->create($request->all());
        if($request->steps) {
            foreach($request->steps as $step) {
                $todo->steps()->create(['name' => $step]);
            }
        }
        return redirect(route('todo.index'))->with('message', 'ToDo Created Successfully.');
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

    public function destroy(ToDo $todo) {
        $todo->steps->each->delete();
        $todo->delete();
        return redirect()->back()->with('message', 'ToDo Deleted!');
    }
}
