@extends('layouts.app') {{-- should be only 1 sign @ --}}
@section('content') {{-- should be only 1 sign @ --}}
<style>
 a:hover {
  background-color: #229e98;
}
a:link, a:visited ,a:active{
  background-color: #a4a0dd;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex container ">
                    <div class="row">
                        <div class="col">
                            Tasks List
                        </div>
                        <div class="col">
                            <a href="/add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new Task</a>
                        </div>
                    </div>
                </div>
                @forelse((array)auth()->user()->tasks as $task)
                <table class="w-full text-md rounded mb-4 mt-3">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Task</th>
                        <th class="text-left p-3 px-5">Title</th> 
                        <th class="text-left p-3 px-5">Description</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            {{$task->title}}
                        </td>
                        <td class="p-3 px-5">
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">
                            
                            <a href="/edite/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <form action="/delete/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                        
                    @empty
                        <h3 style="padding-top:5%; padding-left:3% ">no task until now  </h3>
                    @endforelse
                       
                   
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
@endsection