@extends('layouts.app')

@section('content')

    <div class="apply-container">
        <div class="apply-form-inner">
            <form action="#" method="post">
                <div class="first-step single-step active">
                    <div class="custom-fg">
                        <label for="first_name">First name*</label>
                        <input type="text" name="first_name" id="first_name" required placeholder="John">
                    </div>
                    <div class="custom-fg">
                        <label for="last_name">Last name*</label>
                        <input type="text" name="last_name" id="last_name" required placeholder="Smith">
                    </div>
                    <div class="custom-fg">
                        <label for="birth_date">Date of birth*</label>
                        <input type="text" name="birth_date" id="birth_date" required placeholder="MM/DD/YY">
                    </div>
                    <div class="custom-fg">
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" required placeholder="john.smith@gmail.com">
                    </div>
                    <div class="custom-fg">
                        <label for="socials">Link to social accounts*</label>
                        <input type="text" name="socials" id="socials" required placeholder="Tiktok, IG, Youtube, Soundcloud, LinkedIn...">
                    </div>
                    <div class="custom-fg">
                        <label for="education">Education*</label>
                        <input type="text" name="education" id="education" required>
                    </div>
                    <div class="custom-fg">
                        <label for="city">Where are you from?*</label>
                        <input type="text" name="city" id="city" required placeholder="New York City">
                    </div>
                </div>
                <div class="second-step single-step">
                    <div class="custom-fg">
                        <label for="why">Why do you deserve to win a free year at the smile?*</label>
                        <textarea name="why" id="why" cols="30" rows="10"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="goals">WHAT ARE YOUR GOALS DURING YOUR FREE YEAR?*</label>
                        <textarea name="goals" id="goals" cols="30" rows="10"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="impact">WHAT IMPACTS YOUR CREATIVE VISION WHEN YOU’RE MAKING MUSIC?</label>
                        <textarea name="impact" id="impact" cols="30" rows="10"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="about">TELL US ABOUT YOUR ARTISTIC JOURNEY. HOW DID YOU DISCOVER YOUR PASSION FOR MUSIC, AND WHO HAS INFLUENCED THAT PASSION?</label>
                        <textarea name="about" id="about" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <div class="steps-buttons">
            <button class="prev">Previous</button>
            <button class="next">Next</button>
        </div>
    </div>

@endsection
