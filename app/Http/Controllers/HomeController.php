<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Slogan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $slogans = Slogan::all();
        return view('main.main-page.index' , compact(['sliders','slogans']));
    }
}
