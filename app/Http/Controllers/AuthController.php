<?php
namespace App\Models;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Mail\forgotpasswordmail;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Mail;
use Str;

class AuthController extends Controller
{
    //return 
    public function login()
    {
      // dd(Hash::make(12345));
    //    if(!empty(Auth::check()))
    //    return redirect('admin/dashboard');
   return view('auth.login');

    }
    public function AuthLogin(Request $request)
    {
    //    dd($request->all());
       $remember= !empty($request->remember)?true:false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->pasword],true)){
            if(Auth::User()->user_type==1){
                return redirect('admin/dashboard');

            }
            else if(Auth::User()->user_type==2){
                return redirect('teacher/dashboard');

            }
            else if(Auth::User()->user_type==3){
                return redirect('student/dashboard');

            }

            else if(Auth::User()->user_type==4){
                return redirect('parernt/dashboard');

            }


        }
        else{
            return redirect('/')->withFail('please enter correct email and password');
        }
        
      
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function forgot_password(){

        return view('auth.forgot_password');
    }
    public function check_password(Request $request)
    {
//dd($checkemail);
$user = User::getEmailcheck($request->email);
 //dd($getEmailcheck);
 if(!empty($user)){
    $user->remember_token=Str::random(30);
    $user->save();
    Mail::to($user->email)->send(new forgotpasswordmail($user));
    return redirect('/forgot_password')->withSuccess('email sent succesfully please check email');
   }
else{
    return redirect('/forgot_password')->withFail('email doesnt found in system');
     }
  }
  public function reset_password($token){
//dd($token);
$user = User::getEmailtoken($token);
  //  dd(  $user);
if(!empty( $user ))
{

return view('auth.resetpassword');
}
    
else{
    abort(404);
}

  }
  public function save_reset_password(Request $request,$token)
  {
    //dd($request->all());
    if($request->password == $request->cpassword ){
        $user = User::getEmailtoken($token);
        $user->password=Hash::make($request->password);
        $user->save();
return redirect('auth/login')->withSuccess('password reset succesfully');
    }
    else{
        return redirect()->back()->withFail('password are not same');

    }
  }

    public  function register(Request $request)
    {
        $title="register";
        return view('auth.register');
    }
    public  function newregister(Request $request)
    {
       //dd($request->all());

        return redirect('admin/dashboard');
    }
    
    
}
