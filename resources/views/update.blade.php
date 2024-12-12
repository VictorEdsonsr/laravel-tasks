@extends('Layout.app')

@section('content')
    @include('form', ['task' => $task])
@endsection
