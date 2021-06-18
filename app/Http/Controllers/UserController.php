<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    //
    public function store(Request $request){
        
       
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        Session::flash('success', 'User created successfully!');
        return redirect()->back();
    }

    
}
