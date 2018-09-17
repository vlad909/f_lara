<div>
    @foreach($tasks as $task)
        <p style="color: red">{{$task->name}}</p>
    @endforeach
        <form action="/task" method="post">
            {{csrf_field()}}
            <button type="submit">ukuyjj</button>
        </form>
</div>
