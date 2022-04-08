<?php

namespace App\Http\Controllers;

use App\Models\timeout;
use Illuminate\Http\Request;

class timeoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timeout');
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
     * @param  \App\Models\timeout  $timeout
     * @return \Illuminate\Http\Response
     */
    public function show(timeout $timeout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\timeout  $timeout
     * @return \Illuminate\Http\Response
     */
    public function edit(timeout $timeout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\timeout  $timeout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, timeout $timeout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\timeout  $timeout
     * @return \Illuminate\Http\Response
     */
    public function destroy(timeout $timeout)
    {
        //
    }
}
