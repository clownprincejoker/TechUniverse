<?php

namespace App\Http\Controllers\ModelControllers;

use App\Http\Controllers\Controller;
use App\Models\Shop\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Shop\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
    {
        return view('base.pages.singleSeries')->with('series', $series);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit(Series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Series $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $series)
    {
        //
    }
}
