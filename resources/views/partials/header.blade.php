<header>
    <div class="container ">
        <nav class="d-flex justify-content-between align-items-center ">
            <!-- ? Logo -->
            <div class="logo">
                <img src=" {{ Vite::asset('resources/img/dc-logo.png') }} " alt="DC-Logo">
            </div>

            <!-- ? Links -->
            <div class="links  ">
                <ul class="d-flex gap-4  m-0">


                    <li><a href=" {{ route('characters') }} ">Characters</a></li>
                    <li><a href=" {{ route('characters') }} ">Comics</a></li>
                    <li><a href=" {{ route('characters') }} ">Movies</a></li>
                    <li><a href=" {{ route('characters') }} ">Tv</a></li>
                    <li><a href=" {{ route('characters') }} ">Games</a></li>
                    <li><a href=" {{ route('characters') }} ">Collectibles</a></li>
                    <li><a href=" {{ route('characters') }} ">Videos</a></li>
                    <li><a href=" {{ route('characters') }} ">Fans</a></li>
                    <li><a href=" {{ route('characters') }} ">news</a></li>
                    <li><a href=" {{ route('characters') }} ">shop</a></li>
                </ul>
            </div>

        </nav>
    </div>
</header>
