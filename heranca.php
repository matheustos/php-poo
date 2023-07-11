<?php 

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}


class Carro extends Veiculo {
    public function ligarLimpador(){
        echo "Limapando em 321";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dando grau";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro -> ligarLimpador();
echo "<br>";
$carro->Andar();

echo "<br>";

$moto = new Moto();
$moto->modelo = "XRE";
$moto->cor = "Preto";
$moto->ano = 2015;
$moto->darGrau();
echo "<br>";
$moto->Parar();


?>