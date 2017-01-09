@extends('layouts.master')

@section('category-box')
  <span>{{ $category_name }}</span>
@endsection

@section('left-area')
  <ul class="player-status-list">
    <li><span>プレイヤー</span>{{ $user_name }}</li>
    <li><span>称号</span>追放されしシュヴァルツシュヴァイン</li>
    <li><span>レベル</span> 15</li>

    <div class="divider"></div>

    <li><span>生命力</span>15</li>
    <li><span>集中力</span>10</li>
    <li><span>持久力</span>21</li>
    <li><span>体力</span>39</li>
    <li><span>筋力</span>12</li>
    <li><span>技量</span>15</li>
    <li><span>理力</span>11</li>
    <li><span>信仰</span> {{ $followers }}</li>
    <li><span>運</span>8</li>
  </ul>
@endsection

@section('right-area')
  <ul class="player-status-list">
    <li><span>性別</span>男</li>
    <li><span>年齢</span>25</li>
  </ul>
@endsection

          <!-- <ul>
          @foreach ($info as $k => $v)
            <li>{{ $k }} : {{ $v }}</li>
          @endforeach
          </ul> -->
