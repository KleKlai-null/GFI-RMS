<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends ApiController
{
    public function register(CreateUserRequest $request)
    {
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            if($request->has('role')) {
                $user->syncRoles($request->role);
            }
            
            return $this->sendResponse('User created successfully.');
        } catch (Exception $exception) {

            return $this->sendError('Unexpected Error', $exception, 500);
        }
    }

    public function login(LoginUserRequest $request)
    {
        try {

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return $this->sendError('Email & Password does not match with our record.');
            }

            $user = User::with('roles')->where('email', $request->email)->first();

            return response()->json([
                'status'    => true,
                'message'   => 'User Logged In Successfully',
                'token'     => $user->createToken('DocgenFrontEnd')->plainTextToken,
                'user'      => $user
            ], 200);

        } catch (Exception $exception) {

            return $this->sendError('Unexpected Error', $exception);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return $this->sendResponse('Token revoke successfully');
    }
}
