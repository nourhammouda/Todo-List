<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    //to show home page with all task
      public function index()
    {
        $tasks = auth()->user()->tasks;
        return view('afterlogin', compact('tasks'));
    } 
    //to add new task
    public function add()
    {
    	return view('createTodo');
    }

    //to create new task in data base 
    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
    	$task = new Task();
      $task->title = $request->title;
    	$task->description = $request->description;
    	$task->save();
    	return redirect('/dashboard'); 
    }

    //to edit the task
    public function edit(Task $task)
    {

    	if (auth()->user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/dashboard');
         }            	
    }

    //to update task 
    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required'
            ]);
        $task->title = $request->title;
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/dashboard'); 
    	}    
    }

    //to delete task 
    public function delete($id){

      $task=Task::where('id',$id)->first();
      $task->delete();
      return  redirect('/dashboard'); 
    }

}
