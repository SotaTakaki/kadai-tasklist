@extends("layouts.App")

@section("content")

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route("tasks.edit", "このタスクを編集", ["task" => $task->id], ["class" => "btn btn-light"]) !!}
    @if (Auth::id() == $task->user_id)
        {{-- 投稿削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    @endif
    
    
@endsection