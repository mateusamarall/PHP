<?php

$tempoAgora = new DateTime();

$periodo = new DateInterval("P15D");

echo $tempoAgora->format("d/m/Y h:i:s");

$tempoAgora->add($periodo);

echo"<br>";

echo $tempoAgora->format("d/m/Y h:i:s");

?>