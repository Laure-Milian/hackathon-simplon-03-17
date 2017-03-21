<div class="container-fluid anniversaire-container">
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
