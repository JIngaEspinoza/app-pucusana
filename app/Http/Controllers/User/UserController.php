<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function register(RegisterRequest $request){

        $user = User::create($request -> validated());
        return redirect('/login')->with('success','Cuenta creada existosamente');
    }

    public function login(LoginRequest $request){
        $credentials = $request -> getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('\login') -> withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request,$user);

    }

    public function authenticated(Request $request,$user){
        return redirect('/home');
    }
}
