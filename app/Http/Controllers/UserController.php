<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // protected $middleware = "auth";
     protected function test() 
     {
         return
         ["test" => "test"];
     }
     protected function test1() 
     {
         return
         ["test" => "test2"];
     }
}
