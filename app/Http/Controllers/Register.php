<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Register extends Controller
{
    public function Register(){
        return view('register');
    }

    public function data(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:registerusers',
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
            'profession' => 'required',
        ]);

        $register_user = new Registeruser([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'phone_number' => $request->input('phone'),
            'profession' => $request->input('profession'),
        ]);

        $result = $register_user->save();

        if ($result) {
            return back()->with('Success', 'You have successfully registered');
        } else {
            return back()->with('Fail', 'Fail to register');
        }
    }

    public function Login(){
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:registerusers,email',
            'password' => 'required|min:6'
        ]);

        $user = Registeruser::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('user_id', $user->id);

                $profession = strtolower($user->profession);

                if($profession == "Job Seeker"){
                    return redirect('jobseeker-dashboard')->with('Success', 'Login Successfully');
                }else{
                    return redirect('employer-dashboard')->with('Success', 'Login Successfully');
                }

            } else {
                return back()->with('Fail', 'Password is incorrect');
            }
        } else {
            return back()->with('Fail', "Email doesn't exist");
        }
    }

    // employer dashboard

    public function employerDashboard(){
        return view('employer-dashboard');
    }

    public function jobseekerDashboard(){
        return view('jobseeker-dashboard');
    }
}
