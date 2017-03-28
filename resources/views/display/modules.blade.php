<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Affichage des Modules</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="module meteo" data-module="meteo">
      @include('modules.meteo')
    </div>
    <div class="module planning" data-module="planning">
      @include('modules.planning')
    </div>
    <div class="module blog" data-module="blog">
      @include('modules.blog')
    </div>
    <div class="module anniversaire" data-module="anniversaire">
      @include('modules.anniversaire')
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      var data = {!! json_encode($configCentre) !!};
    </script>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
