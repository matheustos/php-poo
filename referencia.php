<?php 
class Pessoa{
    public $idade;

    public function __clone()
    {
        echo "clonagem de objetos";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;


?>