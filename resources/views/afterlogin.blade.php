@@extends('layouts.app') {{-- should be only 1 sign @ --}}
@@section('content') {{-- should be only 1 sign @ --}}

@section('content')
 
@foreach ($collection as $item) {{-- @foreach $tasks as $task --}}
    {{-- {{ $task->title }} --}}
@endforeach
    
@endsection