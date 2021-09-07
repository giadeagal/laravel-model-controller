@extends("layouts.app")
@section("title","DC - Comics")
@section("content")

   
<div class="card-container">
@foreach($comics as $comic)
        <div class="card">

            
            
            <h3>{{ $comic['title'] }}</h3>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" title="{{ $comic['title'] }}">
            
            
        </div>
 @endforeach
</div>
@endsection