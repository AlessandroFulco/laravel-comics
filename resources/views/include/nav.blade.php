<nav>
    <ul>
        @foreach ($arrLink as $link)
        <li>
            <a href="#">
                {{$link['nameLink']}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
