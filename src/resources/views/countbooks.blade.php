@extends('layout')

@section('content')
<a href='/'><button>HOME</button></a>
<div>
    @for ($i = 0; $i < sizeof($authors); $i++)
        <div>
            <h4>Author: {{ $authors[$i]->author }}</h4>
            <h5>Number of books: {{ $num[$i] }}</h5>
        </div>
        <br>
    @endfor
</div>
@endsection
