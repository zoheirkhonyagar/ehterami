<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Portfolio;
use App\Information;
use App\Subcategory;
use Illuminate\Http\Request;
use SEO;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEO::setTitle('نمونه کار ها');
        SEO::setCanonical('https://ehterami.co/portfolio');

        $information = Information::find(1);
        $categories = Category::all();
        $posts = Post::take(3)->latest()->get();
        return view('main.portfolio.index' , compact('information','categories','posts'));
    }

    public function showSubcategories($id)
    {
        $category = Category::find($id);

        SEO::setTitle($category->title);
        SEO::setCanonical('https://ehterami.co/portfolio/category/' . $category->id);

        $information = Information::find(1);
        $subcategories = Category::find($id)->subcategories()->get();
        $posts = Post::take(3)->latest()->get();
        return view('main.portfolio.show-subcategories.index' , compact('information','subcategories','posts'));
    }

    public function showPortfolios($id)
    {
        $information = Information::find(1);
        $subcategory = Subcategory::find($id);

        SEO::setTitle($subcategory->title);
        SEO::setCanonical('https://ehterami.co/portfolio/subcategory/' . $subcategory->id);

        $category = $subcategory->category()->first();
        $portfolios = $subcategory->portfolios()->get();
        $posts = Post::take(3)->latest()->get();
        return view('main.portfolio.show-portfolios.all' , compact('information','portfolios','category','subcategory','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        SEO::setTitle($portfolio->title);
        SEO::setCanonical('https://ehterami.co/portfolio/' . $portfolio->id);

        $information = Information::find(1);
        $posts = Post::take(3)->latest()->get();
        return view('main.portfolio.show-portfolios.single' , compact('information','portfolio','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
