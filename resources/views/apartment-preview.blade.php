@extends('layouts.app')

@section('content')

    <div class="apartment-preview-cont">
        <div class="image-preview-inner">

{{--            <h2>This could be<br>your home</h2>--}}

            <img src="{{ asset('images/CS01-min.png') }}" class="desc" alt="apartment preview render">
            <img src="{{ asset('images/CS-MOBILE2.jpeg') }}" class="mobile" alt="apartment preview render">

            <div class="apply-box">
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
        <p>Learn more about the project by <a href="#">The Smile</a></p>
    </div>

@endsection
