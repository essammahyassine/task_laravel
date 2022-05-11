@extends('base')

@section('main')
    
<div class="containner">
    <div class="row">
        
        <div class="col-md-8 mx-auto ">
            <form method="post" action="{{ route('tasks.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="stock_name">Task Name:*</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
       
                <div class="form-group">
                    <label for="ticket">Task Description:*</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
       
                
                <button type="submit" class="btn btn-primary">Add Task</button>
            </form>
        </div>
    </div>
</div>

@endsection