<?php

namespace App\Http\Controllers;

use App\Category;
use App\Portfolio;
use App\Information;
use App\Subcategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::find(1);
        $categories = Category::all();
        return view('main.portfolio.index' , compact('information','categories'));
    }

    public function showSubcategories($id)
    {
        $information = Information::find(1);
        $subcategories = Category::find($id)->subcategories()->get();
        return view('main.portfolio.show-subcategories.index' , compact('information','subcategories'));
    }

    public function showPortfolios($id)
    {
        $information = Information::find(1);
        $subcategory = Subcategory::find($id);
        $category = $subcategory->category()->first();
        $portfolios = $subcategory->portfolios()->get();
        return view('main.portfolio.show-portfolios.all' , compact('information','portfolios','category','subcategory'));
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
        return $portfolio;
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
