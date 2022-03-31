<?php

namespace App\Http\Controllers;

use App\Models\dtrtime;
use Illuminate\Http\Request;

class dtrtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dtrtime');
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
     * @param  \App\Models\dtrtime  $dtrtime
     * @return \Illuminate\Http\Response
     */
    public function show(dtrtime $dtrtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dtrtime  $dtrtime
     * @return \Illuminate\Http\Response
     */
    public function edit(dtrtime $dtrtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dtrtime  $dtrtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dtrtime $dtrtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dtrtime  $dtrtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(dtrtime $dtrtime)
    {
        //
    }
}
