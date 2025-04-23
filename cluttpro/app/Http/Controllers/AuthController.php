<?php

namespace App\Http\Controllers;

use App\Models\userdata;
use App\Models\UserTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function create()
    {
        return view('Register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:userdata,email',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password',
            'phone' => 'nullable',
        ]);
    
        $user = new userdata();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->save();
    
        session(['LoggedUser' => $user->id]);
        return view('defaultdashboard');
   
    }
    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Find user by email
        $user = userdata::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            return view('newtask');
        } else {
            // If authentication fails, return with error message
            return back()->with('error', 'Invalid email or password');
        }
    }
    
    public function exit(Request $request)
    {
            Session::flush(); // Clear all session data
            return view('welcome');
    }
   

}