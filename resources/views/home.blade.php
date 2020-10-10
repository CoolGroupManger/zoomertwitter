@extends('master')

@section('title', 'Homepage')

@section('content')

    <ul>
    <strong><h2>Post a message:</h2><strong>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <br>
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <br>
        <button type="submit">Submit!</button>
    </form>
    </ul>
    <br>
    <ul>

    <strong><h2>Recent Messages:</h2><strong>
        @for($i = 0; $i < 2; $i++)
        @endfor
        @foreach($messages as $message)
        <li>
            {{ 'Title: ' }}
            <strong>{{ $message->title }}<strong>

            <br>

            {{ 'Content: ' }}
            {{ $message->content }}

            <br>

            {{ 'Created At: ' }}
            {{ $message->created_at->format('Y-m-d') }}

            <br>
            <br>

        </li>
        @endforeach
    </ul>
    <br>
    <br>
    <strong><a href="/options">Options</a><strong>
    <br>
    <a href="/aboutus">About Us</a>
    <a href="/help">Help</a>

@endsection