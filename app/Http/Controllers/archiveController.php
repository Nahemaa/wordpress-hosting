<?php

namespace App\Http\Controllers;

use App\Models\archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class archiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::User()) {
    
            $employees = archive::join('departments', 'departments.id', '=', 'archives.department')
                                ->join('job_level', 'job_level.id', '=', 'archives.job_level')
                                ->join('job_position', 'job_position.id', '=', 'archives.job_position')
                                ->get(['archives.id', 'archives.employee_id', 'archives.last_name', 'archives.first_name', 'archives.email', 'departments.department_name', 'job_level.level_name', 'job_position.position_name', 'archives.created_at', 'archives.updated_at']);
                                
            return view('archive', compact('employees'));
    
            }
    
            else {
    
                return back()->with('fail', 'Login');
    
            }


        
        return view('archive');
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
     * @param  \App\Models\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function show(archive $archive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit(archive $archive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(archive $archive)
    {
        //
    }
}
