<?php

namespace App\Http\Controllers;

use App\Models\qrscanner;
use Illuminate\Http\Request;

class qrscannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('qrscanner');
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
     * @param  \App\Models\qrscanner  $qrscanner
     * @return \Illuminate\Http\Response
     */
    public function show(qrscanner $qrscanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qrscanner  $qrscanner
     * @return \Illuminate\Http\Response
     */
    public function edit(qrscanner $qrscanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qrscanner  $qrscanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qrscanner $qrscanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qrscanner  $qrscanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(qrscanner $qrscanner)
    {
        //
    }
}
