<?php

namespace App\Http\Controllers;

use App\Medal;
use App\Quote;
use App\Slider;
use App\Slogan;
use App\Category;
use App\Portfolio;
use App\Information;
use App\Subcategory;
use App\AboutUsHistory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        // $this->addPortfolio();
        // $this->addCategory();
        // $this->addSubcategory();
        // return Subcategory::find(2)->category()->get();
        // return Category::find(5)->subcategories()->get();
        // return Subcategory::find(1)->portfolios()->get();
        // return Portfolio::find(1)->subcategories()->get();
        $sliders = Slider::all();
        $slogans = Slogan::all();
        $information = Information::find(1);
        $quotes = Quote::all();
        return view('main.main-page.index' , compact(['sliders','slogans','information','quotes']));
    }

    public function addCategory()
    {
        for ($i=1; $i <6 ; $i++) {
            Category::create([
                'title' => 'category ' . $i ,
                'priority' => $i
            ]);
        }
    }

    public function addSubcategory()
    {
        for ($i=1; $i <15 ; $i++) {
            $random = rand(1,5);
            Subcategory::create([
                'title' => 'subcategory ' . $i ,
                'category_id' => $random
            ]);
        }
    }

    public function addPortfolio()
    {
        for ($i=1; $i <20 ; $i++) {
            $portfolio = new Portfolio();
            $portfolio->title = "Portfolio" . $i;
            $portfolio->image = "img-5c2f9ff74eef9-slider-slide-1-1464x660.jpg";
            $portfolio->body = "$i $i $i Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. $i $i $i";
            $portfolio->save();
            $portfolio->subcategories()->attach([rand(1,4),rand(5,9),rand(10,14)]);
        }
    }

    public function aboutUs()
    {
        $information = Information::find(1);
        $aboutUsHistory = AboutUsHistory::orderBy('id', 'desc')->first();
        $medals = Medal::all();
        return view('main.about-us.index' , compact(['information','medals','aboutUsHistory']));
    }

    public function comingSoon()
    {
        return view('coming-soon.index');
    }

    public function contactUs()
    {
        $information = Information::find(1);
        return view('main.contact-us.index' , compact(['information']));
    }

    public function news()
    {
        $information = Information::find(1);
        return view('main.news.index' , compact(['information']));
    }

}
