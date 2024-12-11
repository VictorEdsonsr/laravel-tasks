@extends('Layout.app')

@section('title', $task->title)
@section('content')
<div>
    <p>{{$task->description}}</p>
    <p>{{$task->long_description}}</p>
    <p>{{$task->created_at}}</p>
    <p>{{$task->updated_at}}</p>
</div>
@endsection
