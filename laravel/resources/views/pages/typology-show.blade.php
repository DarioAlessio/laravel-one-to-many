@extends('layouts.main-layout')

@section('content')

    <h1>TYPOLOGY SHOW</h1>
    <ul>
          <li>
              {{$typology -> name}}
              {{$typology -> type}}
          </li>

    </ul>

@endsection
