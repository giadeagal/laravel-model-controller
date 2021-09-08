@extends("layouts.app")
@section("title","DC - Comics")
@section("content")

   
<div class="card-container">
@foreach($comics as $key => $comic)
        <div class="card">

            
            <a href="{{ route("to-detail", ["id" => $comic->id]) }}"> 
                <h3>{{ $comic['title'] }}</h3>
            </a>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" title="{{ $comic->title }}">
            
            
        </div>
 @endforeach
</div>
@endsection