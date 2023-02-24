@extends('layout.app')

@section('content')

<div class="container mt-5">
  <form action="{{url('add-task')}}" method="POST">
    @csrf
      <div class="row">
        <div class="col-md-8"> 
            <input type="text" class="form-control" placeholder="Enter your task here.." name="title">
        </div>
            <div class="col-md-4">
              <button class="btn btn-primary" type="submit">Add Task</button>
            </div>
      </div>
  </form>
</div>

<div class="container mt-5">
<table class="table tbl-width">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach($tasks as $task)
    <tr>
      <td>{{$task->id}}</td>
      <td>{{$task->title}}</td>
      <td>{{$task->status}}</td>
      <td>
        @if($task->status == 0)
          <a href="{{url('mark-as-completed',$task->id)}}" class="btn btn-success">
            <i class="fa-solid fa-check"></i>
          </a>
        @else
        <a href="" onclick="false" class="btn btn-warning">
          <i class="fa-solid fa-check"></i>
        </a>
        @endif

        <a href="{{url('edit-task',$task->id)}}" class="btn btn-success">
          edit
        </a>

        <a href="{{url('remove-task',$task->id)}}" onclick=" return confirm('Are you sure?')" class="btn btn-success">
        delete
        </a>  
      </td>
        
    </tr>
    @endforeach  
  </tbody>

</table>
</div>

@endsection()