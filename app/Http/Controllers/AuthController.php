<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    

    public function login(Request $request)
    {
        $response = Http::post(env('APP_URL_API').'/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $token = $response->json()['token'];
            session(['jwt_token' => $token]);
            //return redirect()->route('welcome');
            return redirect()->route('books');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}