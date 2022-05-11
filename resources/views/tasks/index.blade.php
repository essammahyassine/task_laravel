@extends('base')

@section('main')
    
<div class="containner">
    <div class="row">
        
        <div class="col-md-8 mx-auto ">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                       
                        <td scope="row">{{$task->id}}</td>
                        <td>{{$task->name}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            
                            <a name="" id="" class="btn btn-primary" href="{{ route('tasks.edit',$task->id)}}" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger" href="{{ route('tasks.destroy',$task->id)}}" role="button">Delete</a>
                        
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection