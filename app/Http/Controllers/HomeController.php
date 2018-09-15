<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Slogan;
use Illuminate\Http\Request;
use App\Information;
use App\Quote;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $slogans = Slogan::all();
        $information = Information::find(1);
        $quotes = Quote::all();
        return view('main.main-page.index' , compact(['sliders','slogans','information','quotes']));
    }
}
