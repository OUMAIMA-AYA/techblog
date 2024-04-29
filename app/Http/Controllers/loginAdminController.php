<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Make sure to import the User model
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginAdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email=$request->email;
        $password=$request->password;

        $admin = User::where('email', $email)
        ->where('password',$password)
        ->where('role_id', 3)
        ->first();

        $user = User::where('email', $email)
        ->where('password',$password)
        ->where('role_id', 4)
        ->first();

        
        if($admin){

            return redirect(route('dashboard'));
        }else if($user)

        { return redirect(route('blogs')) ;
        
        }

    }
}
