@extends('layouts.app')

@section('content')

    <div class="spotify-player">
        <iframe style="border-radius:12px; position: relative;top: 80px;" src="https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO3DbIU8?utm_source=generator" width="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <p>Tracks</p>
    </div>

    <section class="homepage">

        <div class="right-corner">
            <p>40° 48’ 17.0964’’ N 73° 56’ 10.8528’’ W<br> 158 E 126TH ST, NEW YORK<br> NY 10035</p>
        </div>

        <div class="homepage_hero">
            <div class="homepage_topheader">
                <div>
                    <h3>the smile</h3>
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
            <h5>one lucky artist can win the apartment of their dreams in nyc.<br>
            designed by the chainsmokers in collaboration with the smile.</h5>
            <a class="hero_button">APPLY HERE</a>
            <a class="hero_button">VIEW APARTMENT</a>
        </div>
        <div class="video">
            <video src=""></video>
        </div>
    </section>

    <div class="sticky-container">
        <main>
            <section class="horizontal_header">
                <div>
                    <h2>THE PERSON WITH THE MOST INSPIRING STORY, BEST APPLICATION, AND OF COURSE AMAZING TALENT WILL WIN.</h2>
                    <h5>THE WINNER WILL BE ANNOUNCED IN LATE SUMMER AND MOVING IN LATE SUMMER/EARLY FALL</h5>
                </div>
            </section>
            <section>
                <img style="width: 600px;" src="{{ asset('images/TCS10.png') }}" alt="photo">
            </section>
            <section>
                <img width="400" src="{{ asset('images/TCS4.png') }}" alt="photo">
            </section>
            <section>
                <div class="row">
                    <div class="col">
                        <img style="width: 50vw;" src="{{ asset('images/TCS9.png') }}" alt="photo">
                        <div class="row">
                            <div class="col-4">
                                <img width="300" src="{{ asset('images/TCS8.png') }}" alt="photo">
                            </div>
                            <div class="col-4">
                                <img width="300" src="{{ asset('images/TCS11.png') }}" alt="photo">
                            </div>
                            <div class="col-4">
                                <img width="300" src="{{ asset('images/TCS12.png') }}" alt="photo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <img width="400" src="{{ asset('images/TCS3.png') }}" alt="photo">
            </section>
            <section>
                <img width="400" src="{{ asset('images/TCS3.png') }}" alt="photo">
            </section>
            <section>
                <img style="height: 60vh;" src="{{ asset('images/TCS13.png') }}" alt="photo">
            </section>
            <section>
                <img width="800" src="{{ asset('images/CS4.png') }}" alt="photo">
            </section>
            <section>
                <img width="400" src="{{ asset('images/TCS1.png') }}" alt="photo">
                <img width="400" src="{{ asset('images/TCS2.png') }}" alt="photo">
            </section>
            <section>
                <img width="800" src="{{ asset('images/CS5.png') }}" alt="photo">
            </section>
        </main>
    </div>
    <div class="end_buttons">
        <a class="apply">APPLY HERE</a>
        <a class="apartment">APARTMENT</a>
        <h5>SPECIAL THANKS TO OUR PARTNERS</h5>
        <img src="" alt="smile">
        <img src="" alt="chainsmokers">
        <img src="" alt="jaja">
    </div>

@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/homepage.js') }}" type="text/javascript"></script>
@endsection
