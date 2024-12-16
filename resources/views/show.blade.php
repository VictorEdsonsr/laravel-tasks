@extends('Layout.app')

@section('title', $task->title)
@section('content')
<div>
    <div class="mb-7 mt-3 ">
        <a class="link" href="{{route('tasks.index')}}">← Go back to the task list!</a>
    </div>

    <p class="mb-3 text-slate-700">{{$task->description}}</p>
    <p class="mb-3 text-slate-700">{{$task->long_description}}</p>
    <p class="mb-3 text-slate-500 text-sm">Created at {{$task->created_at->diffForHumans()}} • Updated at {{$task->updated_at->diffForHumans()}}</p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif
    </p>

    <div class="flex gap-5">
        <a class="btn" href="{{route('tasks.edit', ['task' => $task])}}">Edit</a>

        <form method="POST" action="{{route('tasks.toggle-complete', ['task' => $task])}}">
            @csrf
            @method('PUT')
            <button class="btn" type="submit">Mark task as {{$task->completed ? 'not completed' : 'completed'}}</button>
        </form>

        <form action="{{route('tasks.destroy', ['task' => $task])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection
