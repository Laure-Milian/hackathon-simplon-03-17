<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/meteo.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>

@extends('display.modules')

@section('meteo')

    <div id="meteo" class="container-fluid bs-callout bs-callout-danger">
        <h1 id="city">{{$ville}}</h1>


        <div class="card main_card_meteo">
            <div class="card-block main_card_meteo_block">
                    <div class="main_card_meteo_inline">
                        <img id="day0_icon" src="http://www.prevision-meteo.ch/style/images/icon/ensoleille-big.png">
                    </div>
                    <div class="main_card_meteo_inline">
                        <h2>
                            <?php
                            date_default_timezone_set('Europe/Paris');
                            setlocale(LC_TIME, 'fr_FR.utf8','fra');
                            echo strftime("%A %d %B %Y");
                            ?>
                        </h2>
                        <h1 id="day0_condition"></h1>
                        <h2 id="day0_tmax"></h2>
                        <h2 id="day0_tmin"></h2>                        
                    </div>
                </div>
        </div>
        <div class="card-deck">
            <div id="day1" class="card card_meteo">
                <div>
                    <img id="day1_icon" class="card-img-top" src="..." alt="Card image cap">
                </div>
                <div class="card-block">
                    <h3 id="day1_date" class="card-title"></h3>
                    <h2 id="day1_condition" class="card-title"></h2>
                    <h4 id="day1_tmax" class="card-title"></h4>
                    <h4 id="day1_tmin" class="card-title"></h4>
              </div>
            </div>
            <div id="day2" class="card card_meteo">
                <div>
                    <img id="day2_icon" class="card-img-top" src="..." alt="Card image cap">
                </div>
                <div class="card-block">
                    <h3 id="day2_date" class="card-title"></h3>
                    <h2 id="day2_condition" class="card-title"></h2>
                    <h4 id="day2_tmax" class="card-title"></h4>
                    <h4 id="day2_tmin" class="card-title"></h4>
                </div>
            </div>
            <div id="day3" class="card card_meteo">
                <div>
                    <img id="day3_icon" class="card-img-top" src="..." alt="Card image cap">
                </div>
                <div class="card-block">
                  <h3 id="day3_date" class="card-title"></h3>
                  <h2 id="day3_condition" class="card-title"></h2>
                  <h4 id="day3_tmax" class="card-title"></h4>
                  <h4 id="day3_tmin" class="card-title"></h4>
                </div>
            </div>
        </div>
    </div>

    <p class="credits_meteo">www.prevision-meteo.ch</p>

@endsection 

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
