@extends('templates.base')


@section('series')
    <main>
        <h1>{{ $comic['title'] }}</h1>

        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

        <div>{{$comic['price']}}</div>
        <p>{{$comic['description']}}</p>
        <ul>
            @foreach ($comic['artists'] as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection
