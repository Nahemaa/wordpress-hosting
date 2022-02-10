<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    
    public function login()
    {
        return view ("users.login");
    }

    public function registration()
    {
        return view ("users.registration");

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
            'sex' =>'required',
            'marital_status' =>'required',
            'address' =>'required',
            'city' => 'required',
            'zip_code' =>'required|digits:4',
            'contact_number' =>'required|digits:11'

        ]);
    
        $user = New User();
        $user ->last_name = $request->last_name;
        $user ->first_name = $request->first_name;
        $user ->email = $request->email;
        $user ->confirm_email = $request->confirm_email;
        $user ->password = Hash::make($request->password);
        $user ->confirm_password = Hash::make($request->confirm_password);
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

    }

    public function loginchecker(Request $request) {

        $request->validate([

            'email'=>'required|email|exists:users,email',
            'password'=>'required'

        ]);

        $validator = User::where('email','=', $request->email)->first();

        if ($validator) {

            if (Hash::check($request->password, $validator->password)){

                $request->session()->put('loginID', $validator->id);
                return redirect ('dashboard');

                } 

                else {

                    return redirect()->back()->withErrors('fail');

                }

            }

        } 

    public function SignedIn() {

            $data = array();
            if (Session::has('loginID')) {

                $data = User::where('id','=', Session::get('loginID'))->first();
                return view('dashboard', compact('data'));
            }

            return view('dashboard', compact('data'));

        }

    public function logout() {

        if (Session::has('loginID')){
            Session::pull('loginID');
            return redirect('login');

        }

    }




















}
    


        



    
    
    
    
    
    






    