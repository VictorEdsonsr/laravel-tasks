@extends('Layout.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
<div>
    <form method="POST" action={{ isset($task) ? route('tasks.update', ['task' => $task->id ]) :route('tasks.store') }}>
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title ?? old('title')}}">
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{$task->description ?? old('description')}}">
            @error('description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Long Description</label>
            <input type="text" name="long_description" id="long_description" value="{{$task->long_description ?? old('long_description')}}">
            @error('long_description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">{{isset($task) ? 'Update Task' : 'Create Task'}}</button>
    </form>
</div>
@endsection
