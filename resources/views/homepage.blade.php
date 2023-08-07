@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <div class="modal modal-ip" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>You successfully applied for the apartment!<br>
                        <button type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="homepage-container">
        <section class="homepage">
            <div class="homepage_hero">
                <div class="homepage_topheader">
                    <div class="smile_image">
                        <img src="{{ asset('images/the smile w.png') }}" style="margin-top: 20px;" width="200" alt="smile">
                        <h5>presents</h5>
                    </div>
                    <h1>Artist in</h1>
                </div>
                <h2 class="active" id="dentonX">Residence</h2>
                <h2 id="ballet">Residence</h2>
                <h2 id="asgard">Residence</h2>
                <h2 id="ffcairo">Residence</h2>
                <h2 id="megren">Residence</h2>
                <h2 id="ladi">Residence</h2>
                <h2 id="epical_comeback">Residence</h2>
                <h2 id="mrs_saint">Residence</h2>
                <h2 id="pamors">Residence</h2>
                <div class="tcs-logos">
                    <img src="{{ asset('images/TCS Logo black.png') }}" alt="logo">
                    <img src="{{ asset('images/TCS Logo black.png') }}" alt="logo">
                </div>
                <h5>one lucky artist can win the apartment of their dreams in nyc.<br>
                    designed by the chainsmokers in collaboration with the smile.</h5>
                <a href="{{ route('show-apply') }}" class="hero_button">APPLY HERE</a>
                <a href="{{ route('show-apartment-preview') }}" class="hero_button">VIEW APARTMENT</a>
            </div>
            <div class="video">
                <video src=""></video>
            </div>
        </section>

        <div class="video-inner">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/846603546?h=663f90ba7e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="TheSmile_TCS_AIR_Apt_Giveaway_Horizontal_FINAL_Youtube_TikTok_IG_Native"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>

        <div class="sticky-container desc">
            <main>
                <section class="horizontal_header">
                    <div>
                        <h2>THE PERSON WITH THE MOST INSPIRING STORY, BEST APPLICATION, AND OF COURSE AMAZING TALENT WILL WIN.</h2>
                        <h5>THE WINNER WILL BE ANNOUNCED IN LATE SUMMER AND MOVING IN LATE SUMMER/EARLY FALL</h5>
                    </div>
                </section>
                <section>
                    <img style="height: 55vh; margin: 0 25px;" src="{{ asset('images/TCS10.png') }}" alt="photo">
                </section>
                <section>
                    <img style="height: 60vh; margin: 0 25px;" src="{{ asset('images/TCS4.png') }}" alt="photo">
                </section>
                <section>
                    <div class="row">
                        <div class="col">
                            <img style="height: 30vh; margin: 0 0 0 75px;" src="{{ asset('images/TCS9.png') }}" alt="photo">
                            <div class="row" style="margin: 0 25px;">
                                <div class="col-4">
                                    <img style="height: 30vh;" src="{{ asset('images/TCS8.png') }}" alt="photo">
                                </div>
                                <div class="col-4">
                                    <img style="height: 30vh;" src="{{ asset('images/TCS11.png') }}" alt="photo">
                                </div>
                                <div class="col-4">
                                    <img style="height: 30vh;" src="{{ asset('images/TCS12.png') }}" alt="photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <img style="height: 45vh; margin: 15vh 25px 0 100px;" src="{{ asset('images/TCS3.png') }}" alt="photo">
                </section>
                <section>
                    <img style="height: 60vh; margin: 0 25px;" src="{{ asset('images/TCS13.png') }}" alt="photo">
                </section>
                <section>
                    <img style="height: 30vh;" src="{{ asset('images/CS4.png') }}" alt="photo">
                </section>
                <section style="flex-direction: column;">
                    <img style="height: 29vh; margin: 0 25px 2vh" src="{{ asset('images/TCS1.png') }}" alt="photo">
                    <img style="height: 29vh; margin: 0 25px;" src="{{ asset('images/TCS2.png') }}" alt="photo">
                </section>
                <section>
                    <img style="height: 60vh; margin-right: 10vw;" src="{{ asset('images/TCS5.png') }}" alt="photo">
                </section>
            </main>
        </div>

{{--        <div class="images-home mobile">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <img src="{{ asset('images/TCS9.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-4">--}}
{{--                    <img src="{{ asset('images/TCS8.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <img src="{{ asset('images/TCS11.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <img src="{{ asset('images/TCS12.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-4">--}}
{{--                    <img src="{{ asset('images/TCS1.png') }}" alt="">--}}
{{--                    <img src="{{ asset('images/TCS2.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-8">--}}
{{--                    <img src="{{ asset('images/TCS5.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="end_buttons">
            <div class="apply-here-cont">
                <a href="{{ route('show-apply') }}" class="apply">APPLY HERE</a>
                <img src="{{ asset('images/TCS5.png') }}" alt="apply button">
            </div>
            <div class="apartment-cont">
                <a href="{{ route('show-apartment-preview') }}" class="apartment">APARTMENT</a>
                <img src="{{ asset('images/TCS13.png') }}" alt="apartment">
            </div>
            <h5>SPECIAL THANKS TO OUR PARTNERS</h5>
            <div class="partners">
                <img src="{{ asset('images/the smile w.png') }}" alt="smile" width="116">
                <img src="{{ asset('images/TCS Logo black.png') }}" width="139" style="filter: invert(1);" alt="chainsmokers">
                <img src="{{ asset('images/jaja w.png') }}" width="93" alt="jaja">
            </div>
        </div>
    </div>

@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/homepage.js') }}" type="text/javascript"></script>
@endsection
