<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
     
    public function register(){
        
        return view('auth.register');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    } 


    public function authenticate(Request $request){
           $email = $request->email;
           $password = $request->password;

           $user = user::forEmail($email);
           if($user){
            if(Hash::check($password, $user->password)){
                 // Authentication successful
                 Auth::login($user);
                 return redirect()->route('phone.book'); // or wherever you want to redirect;
           
               } else {
                // Password mismatch
                session()->flash('danger', 'Invalid credentials');
                
            }
        } else {
            // User not found
            session()->flash('danger', 'User not found for email ' . $email);
            return redirect()->back();
        }
    }

    public function createUser(RegisterUserRequest $request) {

        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
           $user->password = Hash::make($request->password);

           $user->save();
           session()->flash('success', 'you have signed up.Now login in to gain access');
           return redirect()->route('login');
    }


}
