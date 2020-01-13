@extends('layout')

@section('content')

    <form method="post" action="{{ route('update', ['id'=>$memo->id]) }}">
    @csrf
    <textarea name="main_content" row="4">{{ $memo->main_content }}</textarea>
        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </form>

@endsection
