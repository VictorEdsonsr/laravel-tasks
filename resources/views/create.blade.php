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
    <form method="POST" action={{ route('tasks.store') }}>
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="description">Descrição</label>
            <input type="text" name="description" id="description" value="{{old('description')}}">
            @error('description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Descrição Detalhada</label>
            <input type="text" name="long_description" id="long_description" value="{{old('long_description')}}">
            @error('long_description')
                <p  class="error-message">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Criar Tarefa</button>
    </form>
</div>
@endsection
