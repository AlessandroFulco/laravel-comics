<footer>
    <div class="container-fluid my-bg-image">
        <div class="row">
            <div class="col">

                <div class="container">
                    <div class="row">
                        <div class="col my-5">
                            <div class="content-footer">

                                @foreach (config('footer') as $key => $footerValue)
                                    <div class="list mx-3">
                                        <h4>
                                            {{$footerValue['title']}}
                                        </h4>

                                        <ul>
                                            @foreach ($footerValue['link'] as $footerLink)
                                                <li>
                                                    {{$footerLink}}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col">
                            <div id="bg-logo-footer">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-color-footer-down">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row my-4">

                        <div class="col">
                            <button>
                                SIGN-UP NOW!
                            </button>
                        </div>

                        <div class="col text-end">
                            <span>
                                FOLLOW US
                            </span>

                            <img src="{{asset('images/footer-facebook.png')}}" alt="logo facebook">
                            <img src="{{asset('images/footer-periscope.png')}}" alt="logo periscope">
                            <img src="{{asset('images/footer-pinterest.png')}}" alt="logo pinterest">
                            <img src="{{asset('images/footer-twitter.png')}}" alt="logo twitter">
                            <img src="{{asset('images/footer-youtube.png')}}" alt="logo youtube">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
