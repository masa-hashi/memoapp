@extends('layout')

@section('content')

    <a href="{{ route('create') }}">新規作成</a>

    @foreach ($memos as $memo)
        <div>
            <span> {{ $memo->main_content }} </span>
        <a href="{{ route('edit', ['id'=>$memo->id])}}">編集</a>
        </div>
    @endforeach

@endsection
