<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Nullable;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class loginController extends Controller
{
    
    use AuthenticatesUsers;

    public function login()
    {
        return view ("users.login");
    }

    public function loginchecker(Request $request) {

        $input = $request->all();

        $request->validate([

            'email'=>'required|email|exists:users,email',
            'password'=>'required'

        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
                
            return redirect ('hr_dashboard');

        }

        else {

            return redirect('login')->with('fail', 'Login');

        }

    }

    public function HRSignedIn() {
            
            return view('hr_dashboard');

    }

    public function logout() {

        Auth::logout();
        return redirect('login');

        }

    }


    /*
    if (Auth::user()->department == '0') {
                
        return redirect ('hr_dashboard');

    }
    /*

        



    
    
    
    
    
    






    