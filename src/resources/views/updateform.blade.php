@extends('layout')

@section('content')
<form action="/update/{{ $id }}" method="POST">
    @csrf
    <input placeholder="Author" name="author" required>
    <input placeholder="Book" name="book" required>
    <input type="submit">
</form>
@endsection