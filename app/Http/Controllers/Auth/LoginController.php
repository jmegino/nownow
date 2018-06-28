<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Check either username or email.
     * @return string
     */
    public function username(){
        $identity  = request()->get('identity');
//        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge(['username' => $identity]);
        return 'username';
    }
    
    /**
     * Validate the user login.
     * @param Request $request
     */
    protected function validateLogin(Request $request){

        $this->validate(
            $request,
            [
                'identity' => 'required|string',
                'password' => 'required|string',
            ],
            [
                'identity.required' => 'Username is required',
                'password.required' => 'Password is required',
            ]
        );

//        // dd(request()->all());
    }

//    public function validateLogin(){
//
//        $remember = (Input::has('remember')) ? true : false;
//
//        $auth = Auth::attempt(
//            [
//                'username' => strtolower(Input::get('username')),
//                'password' => Input::get('password')
//            ], $remember
//        );
//
//        if ($auth){
//            return Redirect::to('home');
//        }else{
//            return Redirect::to('/')
//                ->withInput(Input::except('password'))
//                ->with('flash_notice', "Mali pre");
//        }
//    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
//        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/login');
    }


    /**
     * @param Request $request
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request){
        $request->session()->put('login_error', trans('auth.failed'));
        throw ValidationException::withMessages(
            [
                'error' => [trans('auth.failed')],
            ]
        );
    }




}
