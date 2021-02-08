@extends('layouts.main-layout')

@section('content')

    <h1>TYPOLOGIES</h1>
    <ul>
      @foreach ($typologies as $typology)
          <li>
            {{-- <a href="{{ route ('location-show', $typology -> id) }}"> --}}
              {{$typology -> name}}

            {{-- </a> --}}

          </li>
      @endforeach

    </ul>

@endsection
