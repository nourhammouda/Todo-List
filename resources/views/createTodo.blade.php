@extends('layouts.app')
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    .form1 {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 10px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    .submit{
      background-color: #a4a0dd;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width:20%;
    }
    
    .submit:hover {
      background-color: #229e98;
    }
    
    div.container1 {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    div.container2{
        display: flex;
     align-items: center;
    justify-content: center ;
    margin-bottom: 3%;
    margin-top: 2%;
    }
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

@section('content')

    <div class="container container2">
    <h1 > Welcome{{--{{ Auth::user()->name }}--}}  : you can create TOdo</h1>
    </div>
    <div class="container container1" >
    <form action="/create" method="post">
        @csrf {{-- I  do not know why this --}}
        
    <label for="title">Title</label>
    <input class="form1" type="text" id="title" name="title" placeholder="Todo title">

    <label for="description">Description</label>
    <input class="form1" id="description" name="description" placeholder="Write something.." style="height:200px">

    <input class="submit" type="submit" value="Create Now">
    <a class="submit" href="/dashboard">Back</a>
    </form>
    </div>
    
@stop