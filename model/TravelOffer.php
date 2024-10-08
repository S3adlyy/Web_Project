<?php
class Travel {
    private $titre;
    private $dest;
    private $date_d;
    private $date_r;
    private $prix;
    private $dispo;
    private $cate;

    // Constructor with parameters
    function __construct($titre, $dest, $date_d, $date_r, $prix, $dispo, $cate) {
        $this->titre = $titre;
        $this->dest = $dest;
        $this->date_d = $date_d;
        $this->date_r = $date_r;
        $this->prix = $prix;
        $this->dispo = $dispo;
        $this->cate = $cate;
    }

    // Getter methods
    public function getTitre() { return $this->titre; }
    public function getDest() { return $this->dest; }
    public function getDateD() { return $this->date_d; }
    public function getDateR() { return $this->date_r; }
    public function getPrix() { return $this->prix; }
    public function getDispo() { return $this->dispo; }
    public function getCate() { return $this->cate; }

    // Method to display travel offer details in a table
    function show() {
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
                    <td>" . $this->getTitre() . "</td>
                    <td>" . $this->getDest() . "</td>
                    <td>" . $this->getDateD() . "</td>
                    <td>" . $this->getDateR() . "</td>
                    <td>" . $this->getPrix() . "</td>
                    <td>" . $this->getDispo() . "</td>
                    <td>" . $this->getCate() . "</td>
                </tr>
              </table>";
    }
}
?>
