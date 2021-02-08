<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Typology;


class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('pages.task-index', compact('tasks'));
    }
    public function show($id) {
        $task = Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }
    public function create() {
        $employees = Employee::all();
        $typologies = Typology::all();
        return view('pages.task-create', compact("employees", "typologies"));
    }
    public function store(Request $request) {
        $data = $request -> all();
        // dd($data);
        $employee = Employee::findOrFail($data['employee_id']);
        $task = Task::make($request -> all());
        $task -> employee() -> associate($employee);
        $task -> save();
        // dd($data['typologies']);
        $typologies = Typology::findOrFail($data['typologies']);
        $task -> typologies() -> attach($typologies);
        // dd($task);
    }
    public function edit($id) {
        $employees = Employee::all();
        $typologies = Typology::all();
        $task = Task::findOrFail($id);
        return view('pages.task-edit',
            compact('employees', 'typologies', 'task')
        );
    }
    public function update(Request $request, $id) {
        $data = $request -> all();
        // dd($data);
        $employee = Employee::findOrFail($data['employee_id']);
        $task = Task::findOrFail($id);
        $task -> update($data);
        $task -> employee() -> associate($employee);
        $task -> save();
        $typologies = Typology::findOrFail($data['typologies']);
        $task -> typologies() -> attach($typologies);
    }
}
