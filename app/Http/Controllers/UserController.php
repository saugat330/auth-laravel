<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;


class UserController extends Controller
{
    

    public function registerUser(Request $req)
    {

        $req->validate([
            'name' => 'required',

            'email' => 'required|unique:users',//users is table name

            'password' => 'required'

        ]);

        $data = new user();
        $data->name =$req->name;
        $data->email =$req->email;
        $data->password =Hash::make($req->password);

        $data->save();
        if($data)
        {
           // return back()->with('success','user crated');
            return redirect('/login');

        }else{
            return back()->with('fail','Unable to sign up');
        }
       
    }
    public function loginUser(Request $req)
    {

        $req->validate([
            

            'email' => 'required',

            'password' => 'required'

        ]);
        $user =User::where('email','=', $req->email)->first();
        if ($user){
            if(Hash::check($req->password,$user->password)){
                return redirect('/');
            }else{
                return back()->with('fail','Password unable to matched');

            }

        }else{
            return back()->with('fail','User not found');

        }
    }
}