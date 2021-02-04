<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;

class MainController extends Controller
{
    // employee
    public function employeeIndex(){

      $employees = Employee::all();
      return view ('pages.employee-index', compact('employees'));

    }

    public function employeeShow($id){

      $employee = Employee::findOrFail($id);
      return view ('pages.employee-show', compact('employee'));

    }

    //task
    public function taskIndex(){

      $tasks = Task::all();
      return view ('pages.task-index', compact('tasks'));

    }

    public function taskCreate(){

      $employees = Employee::all();

        return view('pages.task-create', compact('employees'));
    }

    public function taskStore(Request $request){

      $newTask = Task::make($request -> all());
      $employee = Employee::findOrFail($request -> get('employee_id'));
      $newTask -> employee() -> associate($employee);
      $newTask -> save();
      return redirect() -> route('task-index');

    }

    public function taskEdit($id){

      $employees = Employee::all();

      $task = Task::findOrFail($id);
      return view ('pages.task-edit', compact('task', 'employees'));
    }
}
