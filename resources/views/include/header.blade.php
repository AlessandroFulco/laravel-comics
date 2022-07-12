<header>
    {{-- pre header --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div id="pre-header">
                                <h6>
                                    DC POWER VISA
                                </h6>
                                <h6>
                                    ADDITIONAL DC SITES
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- header --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content-header">
                    <img src="{{ asset('images/dc-logo.png')}}" alt="dc-logo">

                    {{-- inclusione nav --}}
                    @include('include.nav')

                    <div id="search">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
