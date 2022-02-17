<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
  public function register (Request $request) {
    $fields = $request->validate([
    'name'  => 'required|string',
    'phone'  => 'required|string',
    'email'  =>      'string',
    'trans_Type'  => 'string',
    'code_car'  =>   'integer',
    'x_location'  => 'required|string',
    'y_location' =>  'required|string',
     'password' =>  'required|string|confirmed'

    ]);

 $user = User::create([
   'name' => $fields['name'],
   'phone' => $fields['phone'],
     'email' => $fields['email'],
     'trans_Type' => $fields['trans_Type'],
     'code_car' => $fields['code_car'],
     'x_location' => $fields['x_location'],
     'y_location' => $fields['y_location'],
     'password' =>bcrypt($fields['password'])

 ]);

 $token = $user->CreateToken('clientToken')->plainTextToken;
 $responce = [
                'user'=> $user,
                'token' =>$token
 ];
   return response($responce ,201);

  }

//   public function logout (Request $request)
//   {
//       auth()->user()-> ->delete();
//          return['message ' => 'logged out '] ;

//   }


public function  destroye($id)
{
  return User::destroy($id);
}

public function search($name )
{
 return User::where('name','like','%'.$name.'%')->get();
}
}
