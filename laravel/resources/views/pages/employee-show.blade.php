@extends('layouts.main-layout')

@section('content')

      <h1>
        EMPLOYEES
        {{ $employee -> name}}
      </h1>
            <h2>-------------TASKS-------------</h2>
            <ul>
              @foreach ($employee -> tasks as $task)
                    <li>

                      {{-- {{$task -> title}} --}}

                      {{$task -> title}}
                      {{-- ({{$task-> employee->name}}) --}}
                      <ul>
                        @foreach ($task-> typologies as  $typology)

                          <li>
                            <h2>TYPOLOGY</h2>
                            {{$typology -> name}}
                              {{-- {{$typology -> type}} --}}


                          </li>

                        @endforeach
                      </ul>
                    </li>
              @endforeach
            </ul>
            <h2>-------------LOCATIONS-------------</h2>
            <ul>
              @foreach ($employee -> locations as $location)
                    <li>
                        {{$employee -> name}}
                    </li>
              @endforeach
            </ul>



@endsection
