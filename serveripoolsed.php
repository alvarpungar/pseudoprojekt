<?php

$eesnimi_algab_vokaaliga = true;

class inimene
{
    var $eesnimi = "Alvar";
    var $perenimi = "Pungar";
    var $vanus = 24;
    var $sugu = "Mees";
}

$Pung = new inimene;

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
}


print  "<p>" . $Pung->eesnimi . " " . $Pung->perenimi . " (" . $Pung->vanus . ") " . $Pung->sugu . "</p>";
?>