@extends('layouts.main-layout')

@section('content')

  <h1>
      [{{ $typology -> id }}]
      EDIT TYPOLOGY
  </h1>
  <form action="{{ route('typology-update', $typology -> id) }}" method="POST">
      @csrf
      @method('POST')
      <label for="name">Name</label>
      <input name="name" type="text" value="{{ $typology -> name }}">
      <br>
      <label for="type">Type</label>
      <input name="type" type="text" value="{{ $typology -> type }}">
      <br>

      <label for="tasks[]">Tasks</label> <br>
      @foreach ($tasks as $task)
          <input
              name="tasks[]"
              type="checkbox"
              value="{{ $task -> id }}"
              {{-- VERSIONE PRO --}}
              @if ($typology -> tasks -> contains($task -> id))
                  checked
              @endif
              {{-- VERSIONE ESTESA --}}
              {{-- @foreach ($typology-> tasks as $task_typology)
                  @if ($task_typology -> id == $task -> id)
                      checked
                  @endif
              @endforeach --}}
          >
              {{ $task -> name }}
          <br>
      @endforeach
      <br><br>
      <input type="submit" value="salva">
  </form>

@endsection
