<?php

namespace App\Http\Controllers;

use App\Models\salarymanager, App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class salarymanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::User()) {
            
            return view('salary_manager');
    
            }


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
     * @param  \App\Models\salarymanager  $salarymanager
     * @return \Illuminate\Http\Response
     */
    public function show(salarymanager $salarymanager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salarymanager  $salarymanager
     * @return \Illuminate\Http\Response
     */
    public function edit(salarymanager $salarymanager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salarymanager  $salarymanager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salarymanager $salarymanager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salarymanager  $salarymanager
     * @return \Illuminate\Http\Response
     */
    public function destroy(salarymanager $salarymanager)
    {
        //
    }
}
