<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AfterLogin extends Controller
{
    //

    public function returnTasks(){
         $tasks = auth()->user()->tasks; // get all the logged in user tasks
         return view('afterlogin',compact('tasks')); // return the view with the user tasks
     }
}
