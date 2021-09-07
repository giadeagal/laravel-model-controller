@extends("layouts.app")

@section("title", "Dettaglio Fumetto")

@section("content")

    <div class="detail-container">
    <h2>{{ $comic["title"] }}</h2>
    <img class="detail" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}" title="{{ $comic["title"] }}">
    <p>{{ $comic["price"] }}</p>
    <p id="desc">{{ $comic["description"] }}</p>
    </div>
    
@endsection