<?php

namespace App\Http\Controllers;

use App\Models\changepassword;
use Illuminate\Http\Request;

class changepasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('change_password');
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
     * @param  \App\Models\changepassword  $changepassword
     * @return \Illuminate\Http\Response
     */
    public function show(changepassword $changepassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\changepassword  $changepassword
     * @return \Illuminate\Http\Response
     */
    public function edit(changepassword $changepassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\changepassword  $changepassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, changepassword $changepassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\changepassword  $changepassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(changepassword $changepassword)
    {
        //
    }
}
