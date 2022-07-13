<nav>
    <ul class="my-0">
        @foreach (config('menuLink') as $link)
        <li>
            <a class="{{ Route::currentRouteName() === $link['route'] ? 'active' : ''}}" href="{{ route($link['route'])}}">
                {{$link['nameLink']}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
