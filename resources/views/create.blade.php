@extends('layout')

@section('content')

    <form method="post" action="{{ route('store') }}">
    @csrf
        <textarea name="main_content" row="4"></textarea>
        <button type="submit">作成</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </form>

@endsection
