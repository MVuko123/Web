<?php
$student = array("Ime" => "Marin", "Prezime" => "Vuko", "JMBAG" => 1273671263, "Broj indeks" => 8972381273, "Godina studija" => 3.);

foreach($student as $value) {
    echo "$value <br>";
}

$automobili = array (
        "Citroen" => array(
            "tip_automobila" => array("C3", "C4", "C5"),
            "kubikaza" => array( 150, 180, 200),
            "boja" => array("crna", "siva", "crvena"),
            "godina_proizvodnje" => array(2010, 2012, 2014),
            "motor" => array("dizel", "benzin", "dizel")
        ),
        "Mercedes" => array(
            "tip_automobila" => array("A3", "A5", "A6"),
            "kubikaza" => array( 200, 210, 220),
            "boja" => array("siva", "plava", "crna"),
            "godina_proizvodnje" => array(2008, 2010, 2015),
            "motor" => array("benzin", "dizel", "benzin")
        )
);

for($i = 0; $i < 3; $i++) {
    foreach ($automobili["Citroen"] as $citroen => $value) {
        echo "$citroen : $value[$i]</br>";
    }
    echo "</br>";
}

for($i = 0; $i < 3; $i++){
    echo "Model: ".$automobili["Mercedes"]["tip_automobila"][$i]."</br>";
    echo "Kubikaža: ".$automobili["Mercedes"]["kubikaza"][$i]."</br>";
    echo "Boja: ".$automobili["Mercedes"]["boja"][$i]."</br>";
    echo "Godina prozvodnje: ".$automobili["Mercedes"]["godina_proizvodnje"][$i]."</br>";
    echo "Motor: ".$automobili["Mercedes"]["motor"][$i]."</br></br>";
}

class Kupac{
    public $ime,$prezime;

    function postaviIme($ime){
        $this->ime = $ime;
    }

    function postaviPrezime($prezime){
        $this->prezime = $prezime;
    }

    function ispis(){
        echo "Kupac je: ".$this->ime." ".$this->prezime.".";
    }
}

$kupac = new Kupac();
$kupac->postaviIme("Marin");
$kupac->postaviPrezime("Vuko");
$kupac->ispis();






?>