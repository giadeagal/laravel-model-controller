<header>
    <div class="top">
        header - sezione top
    </div>

    <div class="bottom">
        <div id="logo">
            <a href="{{route('to-home')}}"><img src="{{ asset('img/dc-logo.png')}}" alt=""></a>
        </div>
        
        <nav>
            <ul>
                <li><a href="{{route('to-characters')}}">Characters</a></li>
                <li><a href="{{route('to-comics')}}">Comics</a></li>
                <li><a href="{{route('to-movies')}}">Movies</a></li>
                <li><a href="{{route('to-tv')}}">TV</a></li>
                <li><a href="{{route('to-games')}}">Games</a></li>
                <li><a href="{{route('to-collectibles')}}">Collectibles</a></li>
                <li><a href="{{route('to-videos')}}">Videos</a></li>
                <li><a href="{{route('to-fans')}}">Fans</a></li>
                <li><a href="{{route('to-news')}}">News</a></li>
                <li><a href="{{route('to-shop')}}">Shop</a></li>
            </ul>
        </nav>
    </div>
</header>