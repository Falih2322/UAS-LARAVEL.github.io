<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function registerIndex()
    {
        return view('register.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $user = Users::where('username', $request->username)->first();
    
        if ($user && $request->password === $user->password) {
            return redirect("/");
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

    public function register(Request $request){
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
            'level' => 'required',
        ]);

        $user = Users::create([
            'username'=>$request->username,
            'password'=>$request->password,
            'level' => $request->level
        ]);

        if($user){
            return redirect()
            ->route('users.login');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    
}
