<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'ig' => $request->ig,
            'tt' => $request->tt,
            'web' => $request->web,
            'other' => $request->other,
            'education' => $request->education,
            'college' => $request->college,
            'city' => $request->city,
            'why' => $request->why,
            'goals' => $request->goals,
            'impacts' => $request->impact,
            'about' => $request->about
        ]);

        Session::flash('message', 'You successfully applied for the apartment!');

        return redirect()->route('show-homepage');
    }

}
