@extends('layout.app')

@section('content')
<div class="container mt-5">
  <form action="{{url('update-task', $task->id)}}" method="POST">
    @csrf
      <div class="row">
        <div class="col-md-8"> 
            <input type="text" class="form-control" value="{{$task->title}}" name="title" id="clear_text">
        </div>
            <div class="col-md-4">
              <button class="btn btn-primary" type="submit">Update Task</button>

              <a href="{{url('cancel')}}" class="btn btn-secondary">Cancel</a>
            </div>

            
      </div>
  </form>
</div>
@endsection