<?php

$eesnimi_algab_vokaaliga = true;

$isik = array(
    "eesnimi" => "Alvar",
    "perenimi" => "Pungar",
    "vanus" => "24",
);

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
}

print  "<p>" . $isik['eesnimi'] . " " . $isik['perenimi'] . " (" . $isik['vanus'] . ")</p>";
?>