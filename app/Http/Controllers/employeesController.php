<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;

use App\Models\employees;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\DB;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::User()->department == '0') {
                
            $employees = User::paginate(5);
            return view('employees', ['employees'=>$employees]);

        }
            
        if (Auth::User()->department == '1' || '2' || '3' || '4') {
            
            return back()->with('fail', 'Login');

        }

        else {

            return back()->with('fail', 'Login');

        }

    }

}
