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
            // Check if the user's email is verified
            $user = Auth::user();
            if ($user->email_verified_at === null) {
                // Send email verification and redirect to email verification page
                $this->sendEmail($user);
                return redirect()->route('email.verify')->with('email', $user->email);
            } else {
                // Authentication successful, redirect to dashboard
                return redirect()->route('dashboard');
            }
        } else {
            // Authentication failed, return error response
            return redirect()->back()->with('error','Invalid credentials');
        }
    }


    public function register(Request $request){
        $request->validate([
            'name'  => 'required|min:6',
            'email' => 'required|email|unique:users',
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
            $user->role_id = 2;
            $user->section_id = 1;
            $user->save();
            //send email with 4 digit number verification
            
            $this->sendEmail($user);
            
            $request->session()->put('email',$user->email);
            
            DB::commit();

            Auth::login($user);

            return redirect()->route('email.verify');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error',$th->getMessage() );
        }
    }
    public function sendEmail($user){
        $verification_code = mt_rand(1000, 9999);
        $user->verification_code = $verification_code;
        $user->save();
        Mail::to($user->email)->send(new EmailVerification($user->verification_code));
    }
   

    public function emailVerify(Request $request){
        $user = Auth::user();
        $data['title'] = 'Email Verification';
        $request->session()->put('email',$user->email);
        return view('pages.verification',$data);
    }
     public function emailVerifyPost(Request $request){
        $code = implode('', $request->code);
        $user = Auth::user();

        if($user->verification_code !== $code){
            return redirect()->back()->with('error', 'Verification code does not match.');
        } else {
            // Update user's email_verified_at field
            $user->email_verified_at = now();
            $user->verification_code = null;
            $user->save();
            
            $request->session()->forget('email');
            return redirect()->route('dashboard')->with('success', 'Email verified successfully.');
        }
    }

    public function emailVerifyResend(){
        $user = Auth::user();
        $this->sendEmail($user);
        return redirect()->back()->with('success','Resend Email Virify Success, Plase Check your email');
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