<?php
include('../../htdocs/web/Model/TravelOffer.php');

$titre = $_POST["title"];
$dest = $_POST["des"];
$date_d = $_POST["date"];
$date_r = $_POST["re"];
$price = $_POST["price"];
$dispo = isset($_POST["av"]) ? 'Yes' : 'No';
$cate = $_POST["ca"];

// Create Travel object
$offre1 = new Travel($titre, $dest, $date_d, $date_r, $price, $dispo, $cate);

// Display using var_dump
var_dump($offre1);

// Display using the show method
$offre1->show();
?>
