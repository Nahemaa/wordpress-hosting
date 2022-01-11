<?php

namespace App\Http\Controllers;

use App\Models\accountinformation;
use Illuminate\Http\Request;

class accountinformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountinformation');
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
     * @param  \App\Models\accountinformation  $accountinformation
     * @return \Illuminate\Http\Response
     */
    public function show(accountinformation $accountinformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accountinformation  $accountinformation
     * @return \Illuminate\Http\Response
     */
    public function edit(accountinformation $accountinformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accountinformation  $accountinformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accountinformation $accountinformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accountinformation  $accountinformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(accountinformation $accountinformation)
    {
        //
    }
}
