<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Affichage des Modules</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="module" data-module="meteo">
      @include('modules.meteo')
    </div>
    <div class="module" data-module="planning">
      @include('modules.planning')
    </div>
    <div class="module" data-module="blog">
      @include('modules.blog')
    </div>
    <div class="module" data-module="anniversaire">
      @include('modules.anniversaire')
    </div>

    <script type="text/javascript">
      var data = {!! json_encode($configCentre) !!};
    </script>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
