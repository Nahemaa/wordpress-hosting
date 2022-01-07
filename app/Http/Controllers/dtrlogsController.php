<?php

namespace App\Http\Controllers;

use App\Models\dtrlogs;
use Illuminate\Http\Request;

class dtrlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dtrlogs');
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
     * @param  \App\Models\dtrlogs  $dtrlogs
     * @return \Illuminate\Http\Response
     */
    public function show(dtrlogs $dtrlogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dtrlogs  $dtrlogs
     * @return \Illuminate\Http\Response
     */
    public function edit(dtrlogs $dtrlogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dtrlogs  $dtrlogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dtrlogs $dtrlogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dtrlogs  $dtrlogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(dtrlogs $dtrlogs)
    {
        //
    }
}
