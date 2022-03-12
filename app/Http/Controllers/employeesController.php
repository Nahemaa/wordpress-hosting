<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class employeesController extends Controller
{

    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::User()) {
                
            $employees = User::paginate(5);
            return view('employees', ['employees'=>$employees]);


        }

        else {

            return back()->with('fail', 'Login');

        }

    }

    public function registration()

//return view ("users.registration", ['department' => User::all()]);

/*
$departments['department'] = Departments::get(["name", "id"]);
       return view ("users.registration", $departments);
*/

    {

        $departments = DB::table("departments")->pluck("name", "id");
        return view('users.registration', compact('departments'));

    }

    public function getLevel(Request $request) {

        $levels = DB::table("job_level")
            ->where("department_id", $request->department_id)
            ->pluck("name", "id");
        return response()->json($levels);
        
    }

    public function getPosition(Request $request) {

        
        $positions = DB::table("job_position")
            ->where("position_id", $request->position_id)
            ->pluck("name", "id");
        return response()->json($positions);

    }

    public function checker(Request $request) 
    {

        $request->validate([
            'last_name' =>'required|string',
            'first_name' =>'required|string',
            'email'=>'required|email|unique:users',
            'confirm_email' =>'required|same:email',
            'password'=>'required|min:4|max:16',
            'confirm_password' =>'required|min:4|max:16|same:password',
            'department' => 'required',
            'sex' =>'required',
            'marital_status' =>'required',
            'address' =>'required',
            'city' => 'required',
            'zip_code' =>'required|digits:4',
            'contact_number' =>'required|digits:11'
        ]);

        $validator = Validator::make($request->all, $request);

        if($validator->fails()){

            return redirect()->back()->with($validator);

        }   

    }
    
    public function RegisterUser(Request $request) {

        $request->validate([

            'last_name' =>'required',
            'first_name' =>'required',
            'email'=>'required|email|unique:users',
            'confirm_email' =>'required|same:email',
            'password'=>'required|min:4|max:16',
            'confirm_password' =>'required|min:4|max:16|same:password',
            'department' => 'required',
            'sex' =>'required',
            'marital_status' =>'required',
            'address' =>'required',
            'city' => 'required',
            'zip_code' =>'required|digits:4',
            'contact_number' =>'required|digits:11',

        ]);
    
        $user = New User();
        $user ->employee_id = $request->employee_id=Str::random(16);
        $user ->last_name = $request->last_name;
        $user ->first_name = $request->first_name;
        $user ->email = $request->email;
        $user ->confirm_email = $request->confirm_email;
        $user ->password = Hash::make($request->password);
        $user ->confirm_password = Hash::make($request->confirm_password);

        $user ->department = $request->department;

        $user ->job_level = $request->job_level;

        $user ->job_position = $request->job_position;

        $user ->sex = $request->sex;
        $user ->marital_status = $request->marital_status;
        $user ->address = $request->address;
        $user ->city = $request->city;
        $user ->zip_code = $request->zip_code;
        $user ->contact_number = $request->contact_number;
        $res = $user->save();
        
                if ($res){

                return redirect('employees')->withSuccess('success');
       
            }

            else {

                return redirect()->back()->with('fail');

            }

    }

}
