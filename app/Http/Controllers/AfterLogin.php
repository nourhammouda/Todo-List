<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AfterLogin extends Controller
{
    //
    public  function AllTask($id){ // ignore it for now or delete the function
        $id1=id; // you should use $id not id
        return View('afterlogin')->with($id1); // view not View
    }

    // public function returnTasks(){
    //     $tasks = auth()->user()->tasks; // get all the logged in user tasks
    //     return view('afterlogin',compact('tasks')); // return the view with the user tasks
    // }
}
