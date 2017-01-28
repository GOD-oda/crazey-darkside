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

  <div class="background">
    <div class="container">
      <div class="text-area">
        <div class="text-box ">
          <span class="text-element valign"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="hide introduction">
    <p>
      ようこそ、GITHUB SOULの世界の入り口へ。<br><br>
      ここはGITHUBとSOULが共存する世界。<br>
      COMMITが縦横無尽に駆け巡り、PULL REQUESTが飛び交う世界。<br><br>
      あなたがGITHUBで行動すればSOULが共鳴し、<br>あなた自身を成長させることでしょう。<br><br>
      今こそ新しい扉を開く時です。<br>
      素晴らしい世界でお会いできることを楽しみにしています。<br><br>
      <a href="{{ url('register') }}" class="btn-large open-door">扉を開く</a><a href="#" class="btn-large close-door">扉を閉じる</a>
    </p>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/typed.min.js') }}"></script>

  <script>
    $(function() {
      $('.text-element').typed({
        stringsElement: $('.introduction'),
        typeSpeed: 50,
        showCursor: false
      });
    });
  </script>
</body>
</html>