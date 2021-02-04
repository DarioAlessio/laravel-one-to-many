@extends('layouts.main-layout')

@section('content')

      <h1>
        EMPLOYEES
        {{ $employee -> name}}
      </h1>

            <ul>
              @foreach ($employee -> tasks as $task)
                    <li>

                      {{-- {{$task -> title}} --}}

                      {{$task -> title}}
                      ({{$task-> employee->name}})
                    </li>
              @endforeach
            </ul>



@endsection
