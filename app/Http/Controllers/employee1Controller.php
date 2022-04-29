<?php

namespace App\Http\Controllers;

use App\Models\employee1;
use Illuminate\Http\Request;

class employee1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee1');
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
     * @param  \App\Models\employee1  $employee1
     * @return \Illuminate\Http\Response
     */
    public function show(employee1 $employee1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee1  $employee1
     * @return \Illuminate\Http\Response
     */
    public function edit(employee1 $employee1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee1  $employee1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee1 $employee1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee1  $employee1
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee1 $employee1)
    {
        //
    }
}
