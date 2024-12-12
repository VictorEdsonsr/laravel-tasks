
@extends('Layout.app')

@section('content')
<section>
    <h1>List of tasks</h1>
    <ul>
        @forelse ($tasks as $task )
            <li>
                <a href={{ route('tasks.show', ['task'=> $task->id]) }}>
                    {{$task->title}}
                </a>
            </li>
            @empty
            <div>Você não tem nenhuma tarefa</div>
        @endforelse
        </ul>
</section>
@endsection
