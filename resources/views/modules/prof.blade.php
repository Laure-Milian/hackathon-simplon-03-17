<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <ul>

    @foreach ($profs as $value)
    <li>{{(substr($value->dateNaissance, 5))}}</li>
    @endforeach
  </ul>

  </body>
</html>
