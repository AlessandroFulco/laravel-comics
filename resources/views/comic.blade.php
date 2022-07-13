@extends('templates.base')


@section('series')
    <main>
        <h1>{{ $comic['title'] }}</h1>

        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

        <p>{{$comic['price']}}</p>
    </main>
@endsection
