<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Typology;
use App\Task;



class TypologyController extends Controller
{
    public function index() {
        $typologies = Typology::all();
        return view('pages.typology-index', compact('typologies'));
    }

    public function show($id) {
        $typology = Typology::findOrFail($id);
        return view('pages.typology-show', compact('typology'));
    }

    public function create() {
        $tasks = Task::all();
        return view('pages.typology-create', compact('tasks'));
    }

    public function store(Request $request) {

      $typology = Typology::create($request -> all());
      $tasks = Task::findOrFail($request ['tasks']);
      $typology ->tasks() -> attach($tasks);
      return redirect() -> route('typology-show', $typology -> id);
    }

    public function edit($id) {
      $typology = Typology::findOrFail($id);
      $tasks = Task::all();
      return view('pages.typology-edit', compact('typology', 'tasks'));
    }

    public function update(Request $request, $id) {

      $typology = Typology::findOrFail($id);
      $typology -> update($request -> all());


      if (array_key_exists('tasks', $request -> all())) {
        $tasks = Task::findOrFail($request['tasks']);
      } else {
         $tasks = [];
      }
      $typology -> tasks() -> sync($tasks);

      return redirect() -> route('typology-show', $typology -> id);
    }
}
