<?php

namespace App\Http\Controllers\Usermanagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function edit(User $user)
    {
        $roles = Role::select('name')->get();

        return view('usermanagement.roles', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->role);

        session()->flash('success', $user->fullName() .' role has been updated successfully.');

        return redirect()->route('user.show', $user);
    }
}
