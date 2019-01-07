<?php

namespace App\Http\Controllers;

use App\Post;
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
        $sliders = Slider::all();
        $slogans = Slogan::all();
        $information = Information::find(1);
        $quotes = Quote::all();
        $portfolios = Portfolio::take(8)->latest()->get();
        $posts = Post::take(3)->latest()->get();
        return view('main.main-page.index' , compact(['sliders','slogans','information','quotes','portfolios','posts']));
    }

    public function aboutUs()
    {
        $information = Information::find(1);
        $aboutUsHistory = AboutUsHistory::orderBy('id', 'desc')->first();
        $medals = Medal::all();
        $posts = Post::take(3)->latest()->get();
        return view('main.about-us.index' , compact(['information','medals','aboutUsHistory','posts']));
    }

    public function comingSoon()
    {
        return view('coming-soon.index');
    }

    public function contactUs()
    {
        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        return view('main.contact-us.index' , compact(['information','posts']));
    }

    public function posts()
    {
        $information = Information::find(1);
        $posts = Post::latest()->paginate(9);
        return view('main.post.index' , compact(['information','posts']));
    }

    public function showSinglePost(Post $post)
    {
        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        return view('main.post.single' , compact(['information','post','posts']));
    }

}
