<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    Ini tempat redirect user yang sudah login
     */

    use AuthenticatesUsers;

    /**
     *
     *
     * @var string
     */
    protected $_redirectTo = RouteServiceProvider::HOME; //Redirect kesini

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
