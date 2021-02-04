@extends('layouts.main-layout')

@section('content')

      <h1>EMPLOYEES</h1>



      <ul>
        @foreach ($employees as $employee)

          <li>
              <a href="{{ route('employee-show', $employee -> id)}}">
                {{$employee -> name}}

              </a>
            <ul>
              @foreach ($employee -> tasks as $task)
                    <li>

                      {{$task -> title}}

                      {{-- {{$task -> title}}
                      ({{$task-> employee->name}}) --}}
                    </li>
              @endforeach
            </ul>
          </li>

        @endforeach
      </ul>

@endsection
