<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "Bem-vindo(a), " . $nome . "! ";

if ($cidade == "curitiba") {
    echo "Você é Curitibano!";
}
?>