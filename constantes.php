<?php

// self é usado para acessar a constante dentro do escopo da classe

// parent é usando para acessar a constante dentro do escopo da classe mãe


class Pessoa{
    const nome = "Matheus";

    public function exibirNome(){
        echo self::nome;
    }
}

class Matheus extends Pessoa{
    const nome = "Ferro";

    public function exibirNome(){
        echo parent::nome;
    }
}
$pessoa = new Pessoa();
$pessoa->exibirNome();

echo "<hr>";

$matheus = new Matheus();
$matheus->exibirNome();

echo "<hr>";

class Carro{
    const marca = "Ferrari";

    public function exibirMarca(){
        echo self::marca;
    }
}

$carro = new Carro();
$carro->exibirMarca();

?>