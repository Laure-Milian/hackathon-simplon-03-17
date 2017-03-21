
    <div id="meteo" class="container-fluid bs-callout bs-callout-danger">
        <h1 id="city">{{ $ville === "aix" ? "aix-en-provence" : $ville }}</h1>


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
