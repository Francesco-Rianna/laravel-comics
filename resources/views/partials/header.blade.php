
<header>
    <div class="ms-container d-flex align-items-center justify-content-between p-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        <nav>
            <ul class="d-flex gap-2 list-unstyled">
                <li>Characters</li>
                <li class="ms-hover">
                    <a href="{{ route('cardlist') }}">Comics</a>
                </li>
                <li>Movies</li>
                <li>Tv</li>
                 <li>Games</li>
                <li>Collectibles</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li class="prova">Shop</li>
            </ul>
        </nav>
    </div>
    @include('partials.hero')
    
</header>