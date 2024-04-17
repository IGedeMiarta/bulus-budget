<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AuthenticationController extends Controller
{

    public function signin()
    {
        $data['title'] = 'Login';
        return view('pages.signin',$data);
    }
    public function signup()
    {
        $data['title'] = 'Register';
        return view('pages.signup',$data);
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to dashboard
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, return error response
            return redirect()->back()->with('error','Invalid credentials');
        }
    }

    public function register(Request $request){
        $request->validate([
            'name'  => 'required|min:6',
            'email' => 'required|email',
            'username'  => 'required|min:6|unique:users',
            'password' => 'required|confirmed|min:6',
            
        ]);
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $verification_code = mt_rand(1000, 9999);
            $user->verification_code = $verification_code;
            $user->save();
            //send email with 4 digit number verification
            Mail::to($user->email)->send(new EmailVerification($verification_code));
           
            DB::commit();
            return redirect()->route('email.verify')->with('email', $user->email);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error',$th->getMessage() );
        }
    }
    public function emailVerify(Request $request){

        $data['title'] = 'Email Verification';
        return view('pages.verification',$data);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    public function signin_cover()
    {
        return view('pages.signin-cover');
    }
    public function signin_cover2()
    {
        return view('pages.signin-cover2');
    }
    
    public function signup_cover()
    {
        return view('pages.signup-cover');
    }
    public function signup_cover2()
    {
        return view('pages.signup-cover2');
    }
    public function createpassword()
    {
        return view('pages.createpassword');
    }
    public function createpassword_cover()
    {
        return view('pages.createpassword-cover');
    }
    public function createpassword_cover2()
    {
        return view('pages.createpassword-cover2');
    }
    public function forgot()
    {
        return view('pages.forgot');
    }
    public function forgot_cover()
    {
        return view('pages.forgot-cover');
    }
    public function forgot_cover2()
    {
        return view('pages.forgot-cover2');
    }
    public function reset()
    {
        return view('pages.reset');
    }
    public function reset_cover()
    {
        return view('pages.reset-cover');
    }
    public function reset_cover2()
    {
        return view('pages.reset-cover2');
    }
    public function lockscreen()
    {
        return view('pages.lockscreen');
    }
    public function lockscreen_cover()
    {
        return view('pages.lockscreen-cover');
    }
    public function lockscreen_cover2()
    {
        return view('pages.lockscreen-cover2');
    }
    public function verification()
    {
        return view('pages.verification');
    }
    public function verification_cover()
    {
        return view('pages.verification-cover');
    }
    public function verification_cover2()
    {
        return view('pages.verification-cover2');
    }
    public function maintenance()
    {
        return view('pages.maintenance');
    }
    public function comingsoon()
    {
        return view('pages.comingsoon');
    }
    public function construction()
    {
        return view('pages.construction');
    }
    public function error404()
    {
        return view('pages.error404');
    }
    public function error500()
    {
        return view('pages.error500');
    }
}