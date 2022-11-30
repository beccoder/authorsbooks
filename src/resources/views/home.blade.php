@extends('layout')

@section('content')
<a href='/admin'><button>ADMIN</button></a>
<br>
@foreach ($posts as $post)
<div>
    <h3>
        Book name: {{ $post->book }}
    </h3>
    <div>Author: {{ $post->author }}</div>
    <div>ID: {{ $post->id }}</div>
</div>
@endforeach
@endsection
