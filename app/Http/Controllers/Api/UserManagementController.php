<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfilePasswordRequest;
use App\Http\Requests\UpdateUserRoleRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Throwable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserManagementController extends ApiController
{
    
    // Return all user with roles
    public function index()
    {
        return $this->sendResponse(UserResource::collection(User::with('roles')->get()));
    }

    // Update existing user
    public function reset_user_password(Request $request)
    {
        // return $this->sendError('test');

        // try {

            if(Hash::check($request->admin_password, auth()->user()->password)) {

                $user = User::where('email', $request->email)->first();
                $passwordGenerate = 'bxtr1605';

                $user->update([
                    'password'  => Hash::make($passwordGenerate)
                ]);
    
                return $this->sendResponse('Password reset successfully. New password: ' . $passwordGenerate);

            } else {
                return $this->sendError("Incorrect Password");
            }

            return $this->sendResponse('Update successfully.');
            // return $this->sendResponse($user);

        // } catch (Throwable $exception) {

        //     return $this->sendError($exception);
        // }
    }

    // Not working system cannot find the role. Dev Note: I dont know why
    public function change_user_role(UpdateUserRoleRequest $request)
    {
        // try {
            $user = User::with('roles')->where('email', $request->email)->first();

            if(is_null($user)){
                return $this->sendError($request->email . " doesn't exist on our record.");
            }

            // return $this->sendResponse($user->hasRole($request->role));
            
            if($request->has('role')) {
                $user->syncRoles($request->role);
            }

            return $this->sendResponse($user);

        // } catch (Throwable $exception) {

            // return $this->sendError($exception);
        // }
    }

    public function update_profile_password(UpdateProfilePasswordRequest $request)
    {
        try {

            if(!Hash::check($request->password, auth()->user()->password)) {

                $data = User::findOrFail(auth()->user()->id);

                $data->update([
                    'password'  => Hash::make($request->password)
                ]);
    
                return $this->sendResponse('Your password has been changed successfully');
            } else {
                return $this->sendError("New Password cannot be the same as current password.");
            }
            
        } catch (Exception $exception) {
            return $this->sendError($exception);
        }
    }    
}
