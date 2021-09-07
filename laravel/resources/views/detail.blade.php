@extends("layouts.app")

@section("title", "Dettaglio Fumetto")

@section("content")

    <h2>{{ $comic["title"] }}</h2>
    <img src="{{ $comic["thumb"] }}" alt="">
    <p>{{ $comic["price"] }}</p>
    <p>{{ $comic["description"] }}</p>
    
    </div>
@endsection