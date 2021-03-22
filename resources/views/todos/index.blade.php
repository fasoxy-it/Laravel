@extends('todos.layout')

@section('content')

    <div class="flex justify-center border-b pb-4">
        <h1 class="text">All ToDos</h1>
        <a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
    </div>
    <ul class="my-5">
        <x-alert/>
        @foreach($todos as $todo)
        <li class="flex justify-between p-2">
            @if ($todo->completed)
                <p class="line-through">{{$todo->title}}</p>
            @else
                <p>{{$todo->title}}</p>
            @endif
            <div>
                <a href="{{'/todos/' . $todo->id . '/edit/'}}" class="text-orange-400 cursor-pointer text-white"><span class="fas fa-edit px-2"/></a>
                @if ($todo->completed)
                    <span class="fas fa-check text-green-400 px-2"/>
                @else
                    <span onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit();" class="fas fa-check text-gray-300 cursor-pointer px-2"/>
                    <form style="display:none" id="{{'form-complete-' . $todo->id}}" method="post" action="{{route('todo.complete', $todo->id)}}">
                        @csrf
                        @method('put')
                    </form>
                @endif
            </div>
        </li>
        @endforeach
    </ul>

@endsection
