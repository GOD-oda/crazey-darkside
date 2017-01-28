<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>GITHUB SOUL</title>

  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <div class="background row">
    <div class="col m2 side-content">
      <ul class="category-list">
        <li><a href="{{ url('status') }}">ステータス</a></li>
        <li><a href="{{ url('skills') }}">スキル</a></li>
        <li><a href="{{ url('equipment') }}">装備</a></li>
        <li><a href="{{ url('title') }}">称号</a></li>
      </ul>
    </div>

    <div class="col m10 main-content">
      <div class="category-box">
        <div class="category-name">{{ $category_name }}</div>
        <div class="category-actions">
          @yield('category-actions')
        </div>
        <!-- @yield('category-box') -->
        <!-- <img src="" alt="" class="avatar"> -->
      </div>
      <div class="detail-box">
        @yield('content')
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.modal').modal();
    })
  </script>
</body>
</html>