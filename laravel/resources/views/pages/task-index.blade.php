@extends('layouts.main-layout')

@section('content')

  {{-- dritto verso one --}}

      <h1>TASKS</h1>

      <a href="{{route('task-create')}}"><h2>ADD TASK</h2> </a>

      <ul>
        @foreach ($tasks as $task)

          <li>
            <a href="{{route('task-edit', $task -> id)}}">
              >>>EDIT<<<
            </a>
            {{$task -> title}}

            {{$task -> employee -> name}}

            {{-- <a href="{{route('task-delete', $task -> id)}}">
              >>>DELETE<<<
            </a> --}}
          </li>

        @endforeach
      </ul>

@endsection
