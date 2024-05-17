<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        dd('x');
    }
    public function show(Request $request, $id){
        dd($request->headers, $id);
        }
}
