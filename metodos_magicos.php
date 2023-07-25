<?php

// set/get/toString/invoke

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Matheus";
$pessoa->idade = 50;
$pessoa->sexo = "M";

/*echo $pessoa->nome;
echo "<br>";
echo $pessoa->idade;
echo "<br>";
echo $pessoa->sexo;*/

echo $pessoa = new Pessoa();
echo "<br>";
echo $pessoa();







?>