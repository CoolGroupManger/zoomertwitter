@extends('master')

@section('title', 'Help')

@section('content')

    <br>
    <h1>Help</h1>

    <h2>Homepage</h2>
    <p>btw this is were every thing is at</p>

    <h3>How to post messages:</h3>

    <p>Fill this out.</p>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <br>
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <br>
        <button type="submit">Submit!</button>
    </form>

    <p>And share your creations to the world</p>

    <br>
    <br>
    <strong><a href="/options">Options</a><strong>
    <br>
    <a href="/">Homepage</a>
    <a href="/aboutus">About Us</a>
    <a href="/help">Help</a>

@endsection