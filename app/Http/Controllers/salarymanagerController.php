<?php

namespace App\Http\Controllers;

use App\Models\salarymanager, App\Models\User, App\Models\Positions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            
            $departments = DB::table("departments")->pluck("department_name", "id");

            return view('salary_manager', compact('departments'));
    
            }

        else
         {

                return back()->with('fail', 'Login');
    
        }


    }

    public function getLevel(Request $request) {

        $levels = DB::table("job_level")
            ->where("department_id", $request->department_id)
            ->pluck("level_name", "id");
        return response()->json($levels);
        
    }

    public function addnewposition(Request $request) {

      $position = New Positions();

      $position ->position_name = $request->job_position;
      $position ->position_id = $request->job_level;

      $res = $position->save();
        
      
      if ($res){

      return redirect('payroll')->withSuccess('success');

  }

  else {

      return redirect()->back()->with('fail');

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
