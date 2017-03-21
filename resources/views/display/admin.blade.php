<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">

      <h1 class="header-admin">Page d'administration</h1>

      <form class="admin-form" method="post" action="/admin">
        <div class="form-group">
          <label for="centre">Centre Adonis</label>
          <select class="form-control" name="centre">
              <option value="aix">Aix en Provence</option>
              <option value="bordeaux">Bordeaux</option>
              <option value="lille">Lille</option>
              <option value="lyon">Lyon</option>
              <option value="marseille">Marseille</option>
              <option value="montpellier">Montpellier</option>
              <option value="nantes">Nantes</option>
              <option value="paris">Paris</option>
              <option value="toulouse">Toulouse</option>
          </select>
        </div>
        <div class="form-group">

          <div class="checkbox">
            <label>
              <input type="checkbox" name="meteo" value="1"> Météo
            </label>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="planning" value="1"> Emploi du Temps
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="blog" value="1"> Derniers billets de blog
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="anniversaire" value="1"> Anniversaires
              </label>
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-default">Enregistrer</button>

        {{ csrf_field() }}

      </form>
  </div>

  </body>
</html>
