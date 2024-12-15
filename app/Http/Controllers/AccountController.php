<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Account;

class AccountController extends Controller
{
    public function showSignupForm()
    {
        return view('main.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts',
            'username' => 'required|string|max:255|unique:accounts',
            'password' => 'required|string|min:8',
        ]);

        $account = new Account();
        $account->name = $request->name;
        $account->email = $request->email;
        $account->username = $request->username;
        $account->password = Hash::make($request->password);
        $account->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('main.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_admin === 'no'){
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('adminDashboard');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
