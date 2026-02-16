<?php
include ('views/commun/header.php');
$page = isset($_GET['page']) ?$_GET['page'] : 'index';

switch ($page) {
    case('index') : 
        include ('views/accueil/index.php');
    break;

    case ('sport') :
        include ('views/sport/sport.php');
    break;

    case ("coach") : 
        include ('views/coach/coach.php');
    break;

    case ("membre") :
        include ("views/membres/membre.php");
    break;

    default: 
        include ('views/accueil/index.php');
    break;
        
}