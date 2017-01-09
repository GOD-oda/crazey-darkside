@extends('layouts.master')

@section('category-actions')
  <ul class="equipment-actions-list">
    <li><a href="#modal" class="">装備追加</a></li>
  </ul>
  <div id="modal" class="modal">
    <div class="modal-content">
      <h4 class="grey-text">Modal Header</h4>
      <p>A bunch of text</p>
    </div>
  </div>
@endsection

@section('left-area')
  <ul class="equipments-list">
    @foreach ($equipments as $equipment)
      <li>{{ $equipment }}</li>
    @endforeach
  </ul>
@endsection