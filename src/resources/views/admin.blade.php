@extends('layout')

@section('content')
<a href="/"><button>HOME</button></a>
<br><br>
<div style="margin-bottom: 0.2em;">
    <a href='/api/v1/books/list'><button>List of books in JSON</button></a>
    <a href='/api/v1/books/by-id'><button>Data of books in JSON</button></a>
    <form style="display: inline-block;" action="/api/v1/books/update" method="post">
        <input type="submit" value="Update with SAMPLE values" />
        @method('post')
        @csrf
    </form>
    <form style="display: inline-block;" action="/api/v1/books/id" method="post">
        <input type="submit" value="Delete latest added book" />
        @method('delete')
        @csrf
    </form>
</div>

<div>
    <a href='/countbooks'><button>Authors' number of books</button></a>
    <a href='/showbooks'><button>Authors and their books</button></a>
</div>
<br>
<form action="{{ url('/createform') }}">
    <input style="padding: 0.5em;font-size: 0.8em; border-radius: 10px;"  type="submit" value="CREATE" />
</form>
@foreach ($posts as $post)
<div>
    <h3>
        Book name: {{ $post->book }}
    </h3>
    <div>Author: {{ $post->author }}</div>
    <div>ID: {{ $post->id }}</div>
    <form action="{{ url('/updateform', ['id' => $post->id]) }}">
        <input type="submit" value="Update" />
    </form>
    <form action="{{ url('/delete', ['id' => $post->id]) }}" method="post">
        <input type="submit" value="Delete" />
        @method('delete')
        @csrf
    </form>
</div>
@endforeach
@endsection
