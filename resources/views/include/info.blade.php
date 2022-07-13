<div class="container-fluid my-bg-info">
    <div class="row">
        <div class="col">

            <div class="container">
                <div class="row py-5">

                    @foreach (config('info') as $item)
                        <div class="col">
                            <div class="card-info align-items-center">
                                <img src="{{ asset($item['path'])}}" alt="{{$item['title']}}">
                                <span>
                                    {{$item['title']}}
                                </span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
