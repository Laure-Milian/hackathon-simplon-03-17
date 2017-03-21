<?php

error_reporting(-1);
ini_set('display_errors', 'On');

include ('module_anniversaire.php');
include ('module_EDT.php');

// TODO connexion DB propre
$db_link = new PDO('mysql:host=localhost;dbname=my35868;charset=utf8mb4', 'root', 'casper@js');

// récupération des modules à afficher
$mod_anniv = (isset($_GET['anniv']) && $_GET['anniv']=='oui');
$mod_edt = (isset($_GET['edt']) && $_GET['edt']=='oui');
$mod_meteo = (isset($_GET['meteo']) && $_GET['meteo']=='oui');
$mod_blog = (isset($_GET['blog']) && $_GET['blog']=='oui');

// récupération du numéro de centre
$num_centre = isset($_GET['centre']) ? (int) $_GET['centre'] : 0;

// récupération du délai avant effacement des prochains événements (en minutes)
// on n'affiche que les prochains événements qui commencent à : heure actuelle - délai
$delai_effacement = isset($_GET['delai']) ? (int) $_GET['delai'] : 0;



echo '
<!doctype html>
<html lang="fr">

<!-- ******** HEAD ******** -->
<head>
    <meta charset="utf-8">
    <title>SUPERNOM</title>
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="js/module_meteo.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>
</head>

<!-- ******** BODY ******** -->
<body>
    <div id="page-wrapper">
	
	
	
        <div id="anniversaire">';
	
	    echo getAnniversaireProf($db_link, $num_centre);
	
	echo "</div>
	
	
	
	
	
	
	<div id='meteo'>
	    <p id='temperature'></p>
		
		<img id='temps' alt='couverture nuageuse'/>
	</div>
	
	
	
	
	
	
	<div id='table_events'>";
	
	echo getDerniersEvents($db_link, $num_centre, $delai_effacement);
	
	echo "</div>
	
	
	
	
	
	
	<div id='blog'>
	
	<h3>DERNIERS ARTICLES DU BLOG</h3>
	
	<h4>TITRE TEST</h4>
    <p>blabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablabla</p>
	
	<hr>
	
	<h4>TITRE TEST</h4>
    <p>blabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablabla</p>
	
	<hr>
	
	<h4>TITRE TEST</h4>
    <p>blabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablablablabla bla bla blabla blablablablabla blablabla</p>
	
	</div>
	
	
    </div> <!-- page-wrapper -->
</body>

</html>";

?>