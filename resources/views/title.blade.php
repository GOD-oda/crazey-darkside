@extends('layouts.master')

@section('content')
  <div class="title-area">
    <div class="left-area">
      <ul class="title-list">
        @foreach ($former_titles as $title)
          <li>{{ $title }}</li>
        @endforeach
      </ul>
    </div>
    <div class="right-area">
      <ul class="title-list">
        @foreach ($latter_titles as $title)
          <li>{{ $title }}</li>
        @endforeach
      </ul>
    </div>
    <div class="bottom-area"></div>
  </div>
@endsection