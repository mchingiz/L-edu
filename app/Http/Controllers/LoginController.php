<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function username() {
        return 'email';
    }

    public function login(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $authSuccess = Auth::attempt($credentials, $request->has('remember'));

        if($authSuccess) {
            $this->authenticated();
            $request->session()->regenerate();
            return response(['success' => true], Response::HTTP_OK);
        }

        return
            response([
                'success' => false,
                'message' => 'Auth failed (or some other message)'
            ], Response::HTTP_FORBIDDEN);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }


}
