<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Location;


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

    public function taskUpdate(Request $request, $id){
     $task = Task::findOrFail($id);
     $task -> update($request -> all());

     return redirect() -> route('task-index');

   }

   public function taskDelete($id){
     $task = Task::findOrFail($id);
     $task -> delete();

     return redirect() -> route('task-index');

   }

   //location
   public function locationIndex(){
      $locations = Location::all();
      return view ('pages.location-index', compact('locations'));

   }

   public function locationShow($id){

     $location = Location::findOrFail($id);
     return view ('pages.location-show', compact('location'));

   }
}
