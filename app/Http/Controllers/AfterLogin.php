<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AfterLogin extends Controller
{
    //
    public  function AllTask($id){
        $id1=id;
        return View('afterlogin')->with($id1);
    }
}
