<?php
include("../../htdocs/web/Model/TravelOffer.php");
include("../../htdocs/web/Controller/TravelOfferController.php");

if (isset($_POST["send"])) {
    $titre = $_POST["title"];
    $dest = $_POST["des"];
    $date_d = $_POST["date"];
    $date_r = $_POST["re"];
    $price = $_POST["price"];
    $dispo = isset($_POST["av"]) ? 'Yes' : 'No';
    $cate = $_POST["ca"];

    // Create TravelOffer object
    $offre1 = new Travel($titre, $dest, $date_d, $date_r, $price, $dispo, $cate);

    // Using var_dump to show the object
    var_dump($offre1);

    // Display information using the controller
    $controller = new TravelOfferController();
    $controller->showtraveloffre($offre1);
}
?>
