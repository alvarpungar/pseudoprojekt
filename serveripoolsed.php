<?php
class inimene
{
    var $eesnimi = "Alvar";
    var $perenimi = "Pungar";
    var $vanus = 24;
    var $sugu = "Mees";
}

$person = new inimene;

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($person->eesnimi, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
}


print  "<p>" . $person->eesnimi . " " . $person->perenimi . " (" . $person->vanus . ") " . $person->sugu . "</p>";
?>