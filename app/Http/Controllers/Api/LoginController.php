<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if (auth()->attempt($request->only('email', 'password'))) {
            $currentUser = Auth::user();
            return (new UserResource($currentUser))->additional(
                [
                    'meta' => [
                        'token' => $currentUser->api_token,
                    ]
                ]
            );
        }
        return response()->json([
            'eror' => 'Your Credention not match',
        ]);
    }
}
