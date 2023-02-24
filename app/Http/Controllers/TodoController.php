<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{   
    protected $task;

    public function __construct(){
        $this->task = new Todo();
    }

    public function todo(){
        $response['tasks'] = $this->task->all();
        return view('pages.todos.todos')->with($response);
    }

    public function add_task(Request $request){
       $this->task->create($request->all());
       return redirect()->back();
    }

    public function edit_task($task_id){
       $response['task'] = $this->task->find($task_id);
        
       return view('pages.todos.edit_todo')->with($response);
    }

    public function update_task(Request $request, $id){
        $task = $this->task->find($id);
        $task->title = $request->title;
        $task->save();
        return redirect('/todo-list');
    }

    public function cancel(){
        $response['tasks'] = $this->task->all();
        return view('pages.todos.todos')->with($response);
    }

    public function mark_as_completed($id){
        $task = $this->task->find($id);
        $task->status = 1;
        $task->save();

        return redirect()->back();
    }

    public function remove_task($id){
        $task = $this->task->find($id);
        $task->delete();
        return redirect()->back();
    }


}
