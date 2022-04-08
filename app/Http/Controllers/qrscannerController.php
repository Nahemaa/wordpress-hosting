<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\qrscanner, App\Models\User;
use Carbon\Carbon;




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
   
    public function attendance(Request $request)
    {

        if (User::where('employee_id', $request->attendance )->exists()) {
       
        $present = New qrscanner();

        $date = Carbon::now();

        $present->employee_id = $request->attendance;
        $present->time_in = $date;
        $present->time_out = $request->format("Y-m-d H:i:s");
        $present->log_date = $request->format("Y-m-d H:i:s");
        $present->status = $request->format("Y-m-d H:i:s");



        $present->save();







        
        return view('qrscanner');
        
        }

    }

        
        

    }
