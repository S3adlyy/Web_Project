<?php
class TravelOfferController {
    public function showtraveloffre($offre) {
        // Accessing data using getters
        echo "<table border='2'>
                <tr>
                    <th>Title</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Price</th>
                    <th>Disponibility</th>
                    <th>Category</th>
                </tr>
                <tr>
                    <td>" . $offre->getTitre() . "</td>
                    <td>" . $offre->getDest() . "</td>
                    <td>" . $offre->getDateD() . "</td>
                    <td>" . $offre->getDateR() . "</td>
                    <td>" . $offre->getPrix() . "</td>
                    <td>" . $offre->getDispo() . "</td>
                    <td>" . $offre->getCate() . "</td>
                </tr>
              </table>";
    }
}
?>
