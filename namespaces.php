<?php 
require 'classes/index.php';
require 'models/index.php';

$produto = new \models\Produto();
$produto->mostrarDetalhes();
echo "<br>";
$produto2 = new \classes\Produto();
$produto2->mostrarDetalhes();


?>