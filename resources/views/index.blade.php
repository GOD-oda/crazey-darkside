<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Crazy Darkside</title>
</head>
<body>

  <ul>
    @foreach ($user_information as $key => $info)
      <li>{{ $key }} : {{ $info }}</li>
    @endforeach
  </ul>

</body>
</html>