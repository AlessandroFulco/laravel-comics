@extends('templates.base')


@section('pageTitle', "DC comics - Home")

{{-- sezione comics --}}
@section('series')


    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row my-5">
                            @foreach (config('comics') as $comics)
                                <div class="col-2">
                                    <div class="my-card">
                                        <img class="img-card" src="{{$comics['thumb']}}" alt=" {{ $comics['title']}}">
                                        <h5 class="title-comic">
                                            <a href="{{ route('comic', ['id' => $comics['id']]) }}">
                                                {{ $comics['series']}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('include.info')

@endsection


