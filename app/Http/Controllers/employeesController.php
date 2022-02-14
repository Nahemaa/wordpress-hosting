<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;

use App\Models\employees;
use App\Models\User;
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
        $data = array();
            if (Session::has('loginID')) {

                $employees = DB :: table('users')->get();
                $data = User::where('id','=', Session::get('loginID'))->first();
                return view('employees', compact('data', 'employees'));

            }
            
            if (Session::has('loginID')){
                Session::pull('loginID');
                return redirect('login');
    
            }
        
    }

    public function EmployeesList() {

        $employees = DB :: table('users')->get();
        return view('employees', compact('employees'));

    }




}
