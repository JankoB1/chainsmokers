@extends('layouts.app')

@section('content')

    <div class="apartment-preview-cont">
        <div class="image-preview-inner">

            <div class="apply-box mobile">
                <h2>This could be<br>your home</h2>
                <a href="{{ route('show-apply') }}">Apply here</a>
            </div>

{{--            <h2>This could be<br>your home</h2>--}}

            <img src="{{ asset('images/render-min.png') }}" class="render" alt="">

            <img src="{{ asset('images/CS01-min.png') }}" class="desc" alt="apartment preview render">
            <img src="{{ asset('images/CS-MOBILE2.jpeg') }}" class="mobile" alt="apartment preview render">

            <div class="apply-box desc">
                <h2>This could be<br>your home</h2>
                <a href="{{ route('show-apply') }}">Apply here</a>
            </div>

            <div class="dot studio-box">
                <div class="box-inner">
                    <div class="box">
                        <h4>Studio</h4>
                        <p>Desk</p>
                        <p>Computer</p>
                        <p>Shelves</p>
                        <p>Monitors</p>
                        <p>Speakers</p>
                        <p>DJ / production set</p>
                        <p>Microphone</p>
                        <p>Notebook</p>
                        <p>Chair</p>
                        <p>Carpet</p>
                    </div>
                </div>
            </div>

            <div class="dot dining-area-box">
                <div class="box-inner">
                    <div class="box">
                        <h4>Dining area</h4>
                        <p>Bar cart</p>
                        <p>Credenza</p>
                        <p>Kitchen appliances</p>
                    </div>
                </div>
            </div>

            <div class="dot sleeping-area-box">
                <div class="box-inner">
                    <div class="box">
                        <h4>Sleeping area</h4>
                        <p>Bed frame</p>
                        <p>Mattress</p>
                        <p>Nightstand</p>
                        <p>Lamp</p>
                    </div>
                </div>
            </div>

            <div class="dot living-area-box">
                <div class="box-inner">
                    <div class="box">
                        <h4>Living area</h4>
                        <p>Turntable + speakers</p>
                        <p>Couch</p>
                        <p>Carpet</p>
                        <p>Coffee table</p>
                        <p>Books</p>
                        <p>Side table</p>
                        <p>Chairs</p>
                        <p>Plants</p>
                        <p>Lamps</p>
                        <p>TV</p>
                    </div>
                </div>
            </div>

            <div class="dot entry-area-box">
                <div class="box-inner">
                    <div class="box">
                        <h4>Entry</h4>
                        <p>Carpet</p>
                        <p>Framed images / records</p>
                        <p>Console</p>
                    </div>
                </div>
            </div>

        </div>
        <p class="smile-p">Learn more about the project by <a href="https://www.thesmile.com/">The Smile</a></p>
    </div>

@endsection

@section('scriptsBottom')
    <script>
        if(window.innerWidth < 768) {
            let dots = document.querySelectorAll('.dot');
            dots.forEach((dot) => {
                dot.addEventListener('click', function () {
                    let activeDot = document.querySelector('.dot.active');
                    if(activeDot) {
                        activeDot.classList.remove('active');
                    }
                    dot.classList.toggle('active');
                });
            });
        }
    </script>
@endsection
