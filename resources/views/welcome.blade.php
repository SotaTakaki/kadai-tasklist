@extends('layouts.App')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the TaskList</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection