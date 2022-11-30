@extends('layout')

@section('content')
<a href='/'><button>HOME</button></a>
<div>
    @for ($i = 0; $i < sizeof($authors); $i++)
        <div>
            <h4>Author: {{ $authors[$i]->author }}</h4>
            <div><b>Books:</b></div>
            @foreach ($books[$i] as $book)
                <div>{{ $book }}</div>
            @endforeach
        </div>
        <br>
    @endfor
</div>
@endsection