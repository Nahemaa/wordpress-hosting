<?php

namespace App\Http\Controllers;
use App\Models\qrscanner, App\Models\User;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

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
        $present->time_out = $request->input('time_out', "no time-out data entry");
        $present->log_date = $request->input('log_date', "no log date data entry");
        $present->status = $request->input('status', 0);

        $present->save();

        return redirect('qrscanner')->withSuccess('success', 'success');
        
        }

        if (qrscanner::where('employee_id', $request->attendance )->exists()) {

        $timeout = qrscanner::find('employee_id');

        $date = Carbon::now();

        $timeout->time_out = $date;
        $timeout->log_date = $date;
        $timeout->status = $request->input('status', 1);

        $timeout->update();

        return redirect('qrscanner')->withSuccess('success', 'success');

        }

        else {

            return redirect()->with('fail', 'fail');

        }
        

    }


}
