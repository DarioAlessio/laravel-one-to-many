@extends('layouts.main-layout')

@section('content')


  <h1>NEW TASKS</h1>

  <form action="{{ route('task-store') }}" method="POST">

      @csrf
      @method('POST')

      Title:
      <input name="title" type="text">
      <br>
      Description:
      <input name="description" type="text">
      <br>
      Priority:
      <input name="priority" type="text">
      <br>
      <br>
      <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($employees as $employee)
                <option value="{{ $employee -> id }}">
                    {{ $employee -> name }}
                </option>
            @endforeach
        </select>
        <br>
        <br>
      <input type="submit" value="SAVE">
  </form>

@endsection
