<?php 
// classes, atributos e métodos

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." anos acabou de falar <br>";
    }
}

$matheus = new Pessoa();
$matheus->nome = "Matheus Santos Ferro";
$matheus->idade = 23;
$matheus->Falar();
echo $matheus->nome;

?>