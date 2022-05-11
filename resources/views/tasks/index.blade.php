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
                            
                            <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id)}}" role="button">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('tasks.destroy',$task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection