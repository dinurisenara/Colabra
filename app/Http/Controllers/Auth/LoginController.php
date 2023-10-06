<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
{
    return view('auth.admin-login');
}

public function adminLogin(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'], $request->remember)) {
        return redirect()->intended('/admin/dashboard'); // Redirect to admin dashboard
    }

    return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Admin login failed.']);
}

}
