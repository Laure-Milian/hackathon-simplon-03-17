<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>


<div class="container">
  <div class="row">
    <div class="col-md-5 col-md-offset-3 lp-text">
      <span class="msg-birthday">JOYEUX ANNIVERSAIRE A </span>
      @foreach ($profs as $value)
        @if ($dateNow == substr($value->dateNaissance, 5) && substr($value->CP,0,2) == "31")
          {{$value->prenom." ".substr($value->dateNaissance,5)}}
        @endif
      @endforeach
    </div>
  </div>
</div>
  </body>
</html>
