@extends('templates.base')


{{-- sezione comics --}}
@section('series')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        @foreach ($arrComics as $comics)
                            <div class="col-2">
                                <div class="my-card">
                                    <img class="img-card" src="{{$comics['thumb']}}" alt=" {{ $comics['title']}}">
                                    <h5 class="title-comic">
                                        {{ $comics['series']}}
                                    </h5>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

