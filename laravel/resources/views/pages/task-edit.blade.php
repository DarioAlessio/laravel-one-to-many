@extends('layouts.main-layout')

@section('content')


  <h1>EDIT TASKS  {{$task -> id}}</h1>

  <form action="{{ route('task-store') }}" method="POST">

      @csrf
      @method('POST')

      Title:
      <input name="title" type="text" value="{{$task -> title}}">
      <br>
      Description:
      <input name="description" type="text"value="{{$task -> description}}">
      <br>
      Priority:
      <input name="priority" type="text"value="{{$task -> priority}}">
      <br>
      <br>
      <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($employees as $employee)
                <option value="{{ $employee -> id }}"
                    @if ($task -> employee -> id == $employee -> id)
                        selected
                    @endif
                >{{ $employee -> name }}</option>
            @endforeach
        </select>
        <br>
        <br>
      <input type="submit" value="SAVE">
  </form>

@endsection
