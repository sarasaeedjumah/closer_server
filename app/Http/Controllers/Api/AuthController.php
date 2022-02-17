<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public function any(Request $request){
    return asset('css').$request->text;
    // return " Test one ";
}
}
