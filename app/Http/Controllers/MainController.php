<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        return view('homepage');
    }

    public function showHowToWin() {
        return view('how-to-win');
    }

    public function showFaq() {
        return view('faq');
    }

    public function showRules() {
        return view('rules');
    }

    public function showApartmentPreview() {
        return view('apartment-preview');
    }

    public function showApply() {
        return view('apply');
    }

    public function submitForm(Request $request) {
        $apply = Apply::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'socials' => $request->socials,
            'education' => $request->education,
            'city' => $request->city,
            'why' => $request->why,
            'goals' => $request->goals,
            'impacts' => $request->impact,
            'about' => $request->about
        ]);

        return redirect()->route('show-homepage');
    }

}
