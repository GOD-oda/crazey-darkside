@extends('layouts.master')

@section('left-area')
  <ul class="player-status-list">
    <li><span>プレイヤー</span>{{ $user_name }}</li>
    <li><span>称号</span>〜神の遣い〜</li>
    <li><span>レベル</span> 15</li>
    <li><span>性別</span>男</li>
    <li><span>年齢</span>25</li>
    <li><span>信仰</span> 15</li>
    <li><span>技量</span> 15</li>
  </ul>
@endsection

@section('right-area')
  <ul class="player-status-list">
    <li><span>プレイヤー</span>{{ $user_name }}</li>
    <li><span>称号</span>〜神の遣い〜</li>
    <li><span>性別</span>男</li>
    <li><span>年齢</span>25</li>
    <li><span>レベル</span> 15</li>
    <li><span>信仰</span> 15</li>
    <li><span>技量</span> 15</li>
  </ul>
@endsection

          <!-- <ul>
          @foreach ($info as $k => $v)
            <li>{{ $k }} : {{ $v }}</li>
          @endforeach
          </ul> -->
