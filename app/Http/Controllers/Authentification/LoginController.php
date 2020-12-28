<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Azar\Jsonable\jsonableTrait;
use App\Models\User;
class LoginController extends Controller
{

    use jsonableTrait;

     public function authentificate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           $user = User::where('email', $request->email)->first();
           return $this->ok("access successfull, welcome back".$user->name,["token"=>$user->api_token]);
        }

        return $this->unauthorized("Credentials provided doesnt exists");
     }
}
