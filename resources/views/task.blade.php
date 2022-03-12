<div class="card">
    <div class="card-header">
       <h2> {{ $task->title }} </h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-9">{{$task->description}}</div>
            <div class="col-3">
                @if ({{$task->done}})
                 <p><<ins>is done</ins></p>
                @else
                <p><<ins>be more strong and do it</ins></p>
                @endif
            </div>
          </div>

        </div>
    
    </div>
</div>