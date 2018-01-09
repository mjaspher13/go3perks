<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    
    public function login(Request $request)
    {
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
        ? $this->username()
        : 'username';

        if (Auth::attempt([$field => $request->get($this->username()), 'password' => $request->password])) {
            // Authentication passed...
            activity()
                ->causedBy($request->user()->id)
                ->log('Login');
            if ($request->user()){
                if ($request->user()->role === 0) {
                    return redirect('/admin');
                } else if ($request->user()->role === 1) {
                    return redirect('/merchant');
                } else if ($request->user()->role === 2) {
                    return redirect('/customer');
                } else if ($request->user()->role === 3) {
                    return redirect('/agent');
                } 
            }
        }
        return redirect('/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }
}
