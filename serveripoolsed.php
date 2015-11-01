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

$floating1 = 1.23;
$floating2 = 2.34;
$float_sum = $floating1 + $floating2;


echo "<p>" . $float_sum . "</p>";

echo $_GET['koer'];
?>