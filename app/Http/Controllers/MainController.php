<?php

namespace App\Http\Controllers;

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

}
