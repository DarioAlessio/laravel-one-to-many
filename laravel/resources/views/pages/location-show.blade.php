@extends('layouts.main-layout')

@section('content')

    <h1>{{$location -> name}}</h1>

    <h2>employees:</h2>
    <ul>
      @foreach ($location -> employees as $employee)
          <li>
              {{$employee -> name}}
              {{$employee -> lastName}}

          </li>
          <ul>
            @foreach ($employee -> tasks  as $task)
                <li>
                    {{$task -> title}}
                    {{$task -> description}}

                </li>
            @endforeach

          </ul>
      @endforeach

    </ul>

@endsection
