<?php

namespace App\Http\Controllers;

use App\Models\payroll;
use Illuminate\Http\Request;

class payrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payroll');
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
     * @param  \App\Models\payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function show(payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(payroll $payroll)
    {
        //
    }
}
