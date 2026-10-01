<?php
$n1 = (int)$_POST['num1'];
$n2 = (int)$_POST['num2'];
$soma = $n1 + $n2;

print "Soma: " . $soma . "<br>";

echo "<br>Verificação de tipos:<br>";
var_dump($n1, $n2);
?>