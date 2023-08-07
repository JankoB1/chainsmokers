@extends('layouts.app')

@section('content')

    <div class="whole_how_to_win">
        <div class="how-to-win">
            <h1>How to win!</h1>
            <p class="numbers">1</p>
            <h3>FILL OUT APPLICATION AND SUBMIT YOUR TIKTOK</h3>
            <p class="numbers">2</p>
            <h3>FOLLOW @THESMILEHARLEM ON INSTAGRAM</h3>
            <p class="numbers">3</p>
            <h3>BE ON THE LOOKOUT FOR ANNOUNCEMENTS ON <br> THE SMILE’S INSTAGRAM ACCOUNTS!</h3>
            <a>GET STARTED</a>
        </div>
    </div>

    <div class="apply-container">
        <div class="apply-form-inner">
            <form action="{{ route('submit-form') }}" method="post">
                @csrf
                <div class="first-step single-step active">
                    <div class="custom-fg">
                        <label for="first_name">First name*</label>
                        <input type="text" class="required" name="first_name" id="first_name" required placeholder="John">
                    </div>
                    <div class="custom-fg">
                        <label for="last_name">Last name*</label>
                        <input type="text" class="required" name="last_name" id="last_name" required placeholder="Smith">
                    </div>
                    <div class="custom-fg">
                        <label for="birth_date">Date of birth*</label>
                        <input type="date" class="required" name="birth_date" id="birth_date" required placeholder="MM/DD/YY">
                    </div>
                    <div class="custom-fg">
                        <label for="email">Email*</label>
                        <input type="email" class="required" name="email" id="email" required placeholder="john.smith@gmail.com">
                    </div>

                    <div class="custom-fg">
                        <label for="city">Where are you from?*</label>
                        <input type="text" class="required" name="city" id="city" required placeholder="New York City">
                        <label style="position: absolute; top: 53px;" for="state">State</label>
                        <select style="margin-top: 5px;" name="state" id="state">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                        </select>
                    </div>
                    <div class="custom-fg">
                        <label for="education">Education*</label>
                        <select required name="education" id="education">
                            <option value="High school or equivalent">High school or equivalent</option>
                            <option value="Technical or occupational certificate">Technical or occupational certificate</option>
                            <option value="Associate degree">Associate degree</option>
                            <option value="Bachelor’s degree">Bachelor’s degree</option>
                            <option value="Master’s degree">Master’s degree</option>
                            <option value="Doctorate">Doctorate</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="college-div">
                            <label for="college" class="mobile">If you attended college, where’d you go?</label>
                            <input class="college-input" style="margin-top: 6px;" type="text" name="college" id="college" placeholder="If you attended college, where’d you go?">
                        </div>
                    </div>
                    <div class="custom-fg">
                        <label class="socials-label" for="socials">Link to social accounts <i class="fa-solid fa-chevron-down"></i></label>
                        <div class="socials-inner">
                            <input type="text" name="ig" id="ig" placeholder="Instagram">
                            <input type="text" name="tt" id="tt" placeholder="TikTok">
                            <input type="text" name="web" id="web" placeholder="Website">
                            <input type="text" name="other" id="other" placeholder="Other">
                        </div>
                    </div>
                </div>
                <div class="second-step single-step">
                    <div class="custom-fg">
                        <label for="why">Why do you deserve to win a free year at the smile?*</label>
                        <textarea required name="why" id="why" cols="30" rows="2"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="goals">WHAT ARE YOUR GOALS DURING YOUR FREE YEAR?</label>
                        <textarea name="goals" id="goals" cols="30" rows="2"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="impact">WHAT IMPACTS YOUR CREATIVE VISION WHEN YOU’RE MAKING MUSIC?</label>
                        <textarea name="impact" id="impact" cols="30" rows="2"></textarea>
                    </div>
                    <div class="custom-fg">
                        <label for="about">TELL US ABOUT YOUR ARTISTIC JOURNEY. HOW DID YOU DISCOVER YOUR PASSION FOR MUSIC, AND WHO HAS INFLUENCED THAT PASSION?</label>
                        <textarea name="about" id="about" cols="30" rows="4"></textarea>
                    </div>
                </div>
                <div class="single-step third-step">
                    <h2>Bonus entry</h2>
                    <h5>Submit a creative tiktok!</h5>
                    <p>Whether it’s a dance routine, a song performance, or an engaging storytelling experience, the only requirement is that you ingeniously incorporate the word “Smile” into your creation. This is your chance to show us your imagination and skills, so be really creative. Don’t forget to include the hashtag #TheChainsmokersGiveaway to join the exciting contest.</p>
                    <div class="custom-fg-cb">
                        <label class="container">I agree to terms and conditions
                            <input required type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <p class="note">Send your application and try to win the apartment</p>
                    <div class="cb-buttons">
                        <button type="button" class="cb-prev">Previous</button>
                        <button type="submit" class="cb-next">Send</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="steps-buttons">
            <button class="prev disabled">Previous</button>
            <button class="next">Next</button>
        </div>
    </div>

@endsection

@section('scriptsBottom')
    <script>
        document.querySelector('.how-to-win a').addEventListener('click', function () {
            document.querySelector('.whole_how_to_win').style.display = 'none';
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/apply.js') }}"></script>
@endsection
