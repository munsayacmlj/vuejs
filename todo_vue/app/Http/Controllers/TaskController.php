<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
class TaskController extends Controller
{
    public function viewTasks() {
    	return view('tasks');
    }

    public function showTasks() {
    	return Task::with('user')->get();
    }

    public function saveTasks(Request $request) {
    	$task = new Task;
    	$task->task = $request->task;
    	$task->user_id = Auth::user()->id;
    	$task->save();
    }

    public function deleteTask($id) {
    	$task = Task::find($id)->delete();

    	return redirect('/showtasks');
    }
}
