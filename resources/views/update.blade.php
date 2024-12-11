@extends('Layout.app')

@section('style')
<style>
    .error-message{
        color: red;
        font-size:0.8rem;
    }
</style>

@section('content')
<div>
    <form method="POST" action={{ route('tasks.update',['id' => $task->id]) }}>
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" value="{{$task->title}}">
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="description">Descrição</label>
            <input type="text" name="description" id="description" value="{{$task->description}}">
            @error('description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Descrição Detalhada</label>
            <textarea name="long_description" id="long_description" rows="10">{{$task->long_description}}</textarea>
            @error('long_description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Atulizar Tarefa</button>
    </form>
</div>
@endsection
