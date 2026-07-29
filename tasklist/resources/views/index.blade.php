
<h1>Tasks</h1>

<div>
    @forelse ($tasks as $task)
        <div> 
            {{-- <a href="{{  route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a> --}}
            {{dd(route('tasks.show', ['id' => $task->id]))}}
        </div>
    @empty
        <div>No tasks</div>
    @endforelse
</div>