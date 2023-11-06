<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{

    public function home(Request $request){
        $users = User::paginate(10);
        return view('pages/home',compact('users'));
    }

    public function addUser(Request $request){
        $validation = $request->validate([
            'username' => 'required',
            'email'    => 'required|email',
            'phone_no' => 'required|numeric',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone_no;
        $user->password = Hash::make($request->password);
        $created = $user->save();
        if(!$created){
            return back()->with('error','Unable to create user, Please try again');
        }
        $users = User::all();
        // return view('pages/home',compact('users'))->with('success','User Created Successfully');
        return redirect('/')->with('success','User Created Successfully');
    }
}
