<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers;


use App\Models\User, App\Models\Archive;

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
    
        $employees = User::join('departments', 'departments.id', '=', 'users.department')
                            ->join('job_level', 'job_level.id', '=', 'users.job_level')
                            ->join('job_position', 'job_position.id', '=', 'users.job_position')
                            ->get(['users.id', 'users.employee_id', 'users.last_name', 'users.first_name', 'users.email', 'departments.department_name', 'job_level.level_name', 'job_position.position_name', 'users.created_at']);
                            
        return view('employees', compact('employees'));

        }

        else {

            return back()->with('fail', 'Login');

        }

    }

/*

$employees = User::paginate(5);
return view('employees', ['employees'=>$employees]);

*/

    public function registration()

    {

        $departments = DB::table("departments")->pluck("department_name", "id");
        return view('users.registration', compact('departments'));

    }

    //return view ("users.registration", ['department' => User::all()]);

    /*
    $departments['department'] = Departments::get(["name", "id"]);
       return view ("users.registration", $departments);
*/

    public function getLevel(Request $request) {

        $levels = DB::table("job_level")
            ->where("department_id", $request->department_id)
            ->pluck("level_name", "id");
        return response()->json($levels);
        
    }

    public function getPosition(Request $request) {

        
        $positions = DB::table("job_position")
            ->where("position_id", $request->position_id)
            ->pluck("position_name", "id");
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

        //$user ->confirm_password = Hash::make($request->confirm_password);
    
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

    public function MovetoArchive($id) {

        $hireduser = User::where('id',$id)->first();

        $employeeid = $hireduser->employee_id;
        $lastname = $hireduser->last_name;
        $firstname = $hireduser->first_name;
        $email = $hireduser->email;
        $password = $hireduser->password;
        $department = $hireduser->department;
        $level = $hireduser->job_level;
        $position = $hireduser->job_position;
        $createdat = $hireduser->created_at;

        $hireduser->delete();

        $fireduser = New archive();

        $fireduser->employee_id = $employeeid;
        $fireduser->last_name = $lastname;
        $fireduser->first_name = $firstname;
        $fireduser->email = $email;
        $fireduser->password = $password;
        $fireduser->department = $department;
        $fireduser->job_level = $level;
        $fireduser->job_position = $position;
        $fireduser->created_at = $createdat;

        $fireduser->save();

        return redirect('employees');

    }

    public function EditUser($id) {

        $departments = DB::table("departments")->pluck("department_name", "id");
        $employees = User::find($id);
        return view('users.edituser', compact('employees', 'departments'));

    }

    public function UpdateUser(Request $request, $id) {

        $employees = User::find($id);
        $employees->last_name = $request->input('last_name');
        $employees->first_name = $request->input('first_name');
        $employees->email = $request->input('email');
        $employees->confirm_email = $request->input('confirm_email');
        $employees->password = Hash::make($request->input('password'));
        $employees->confirm_password = Hash::make($request->input('confirm_password'));
        $employees->department = $request->input('department');
        $employees->job_level = $request->input('job_level');
        $employees->job_position = $request->input('job_position');
        $employees->address = $request->input('address');
        $employees->city = $request->input('city');
        $employees->zip_code = $request->input('zip_code');
        $employees->contact_number = $request->input('contact_number');

        $employees->update();

        return redirect('employees');

    }


}
