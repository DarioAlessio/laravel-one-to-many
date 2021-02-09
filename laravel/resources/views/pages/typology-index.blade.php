@extends('layouts.main-layout')

@section('content')

    <h1>TYPOLOGIES</h1>
    <a href="{{ route('typology-create')}}"><h2>ADD TYPOLOGY NOW</h2> </a>

    <ul>
      @foreach ($typologies as $typology)
          <li>
            <a href="{{ route ('typology-show', $typology -> id) }}">
              {{$typology -> name}}
              {{-- {{$typology -> type}} --}}
            </a>
            <a href="{{route('typology-edit', $typology -> id)}}">
              >>>EDIT<<<
            </a>

          </li>
      @endforeach

    </ul>

@endsection
