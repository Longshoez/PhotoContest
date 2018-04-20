<?php

/*eventualmente meter esto en un archivo externo*/

/*importando estilos*/
echo'<link rel="stylesheet" href="registerStyle.css">';
echo '<link href="style.css" rel="stylesheet" type="text/css" />';
echo '<link href="navBarStyle.css" rel="stylesheet" type="text/css" />';
echo'<link rel="stylesheet" href="courseContainerStyle.css">';
/*importando librerias de fonts e iconos*/
echo '<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">';
echo'<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">';
echo'<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">';
/*importar scripts, metadata*/
echo'<meta http-equiv="content-type" content="text/html;charset=utf-8" /> <!-- for spanish characteres-->';
echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
echo'<script src="jquery-3.3.1.js"></script>';
echo'<script src="animations.js"></script>';

#login/signup bar
include 'register.php';
#include 'mainpage.php';

#main app
#here the nav bar
/*if logged in = true then show this one */
#nclude 'navBar.php';
#the container
#include 'courseContainer.php';


?>
