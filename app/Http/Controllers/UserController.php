<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user=UserController::where('id',$id)->firstOrfail();
        return view('users.show', compact('user'));
    }

    
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        
        $user->roles()->sync($request->roles);
        return redirect()->route('users.edit', $user)->with('success', 'Se asignó correctamente los roles.');
    }
}
