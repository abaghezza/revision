<?php
$link = mysqli_connect("localhost", "abdel", "abdel", "agence");
mysqli_set_charset($link , 'utf8');

$menu=array(
["index.php", "Accueil"],
["contact.php", "Contact"],
["acheter.php", "Acheter"],
["louer.php", "Louer"],
["vendre.php", "Vendre"],
["dataset.php", "Jeu de données"] );

require "inc_fonction.php";
?>