@extends('layouts.main-layout')

@section('content')

  <h1>NEW TYPOLOGY</h1>
  <form action="{{ route('typology-store') }}" method="POST">
      @csrf
      @method('POST')
      <label for="name">Name</label>
      <input name="name" type="text">
      <br>
      <label for="type">Type</label>
      <input name="type" type="text">
      <br>

      <label for="tasks[]">Tasks</label> <br>
      @foreach ($tasks as $task)
          <input name="tasks[]" type="checkbox" value="{{ $task -> id }}"> {{ $task -> name }} <br>
      @endforeach
      <br><br>
      <input type="submit" value="salva">
  </form>

@endsection
