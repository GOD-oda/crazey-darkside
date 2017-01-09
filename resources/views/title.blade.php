@extends('layouts.master')

@section('left-area')
  <ul class="former-titles">
    @foreach ($former_titles as $title)
      <li>{{ $title }}</li>
    @endforeach
  </ul>
@endsection

@section('right-area')
  <ul class="latter-titles">
    @foreach ($latter_titles as $title)
      <li>{{ $title }}</li>
    @endforeach
  </ul>
@endsection