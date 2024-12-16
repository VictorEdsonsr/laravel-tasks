
@extends('Layout.app')

@section('content')
<section>

    @section('title', 'List of tasks')

    <div class="mt-3">
        <a class="link" href="{{route('tasks.create')}}"> Add Task</a>
    </div>

    <ul class="mt-6 gap-4 flex flex-col">
        @forelse ($tasks as $task )
            <li>
                <a @class([ 'line-through' => $task->completed]) href={{ route('tasks.show', ['task'=> $task->id]) }}>
                    {{$task->title}}
                </a>
            </li>
            @empty
            <div>You don`t have any task</div>
        @endforelse
        @if ($tasks->count())
            <nav>
                {{$tasks->links()}}
            </nav>
        @endif
        </ul>
</section>
@endsection
