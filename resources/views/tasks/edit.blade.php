@extends('base')

@section('main')
    
<div class="containner">
    <div class="row">
        
        <div class="col-md-8 mx-auto ">
            <form method="post" action="{{ route('tasks.update', $task->id) }}">
                @method('PATCH') 
            @csrf
                <div class="form-group">    
                    <label for="stock_name">Task Name:*</label>
                    <input type="text" class="form-control" name="name" value="{{$task->name}}"/>
                </div>
       
                <div class="form-group">
                    <label for="ticket">Task Description:*</label>
                    <input type="text" class="form-control" name="description" value="{{$task->description}}"/>
                </div>
       
                
                <button type="submit" class="btn btn-danger">Update Task</button>
            </form>
        </div>
    </div>
</div>

@endsection