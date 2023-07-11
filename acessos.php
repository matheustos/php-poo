<?php 
/* 

public -> Permite acessar os atributos e métodos da classe em qualquer lugar do código, ou seja, dentro e fora do escopo da classe.

protected -> Permite acessar os atributos e métodos da classe apenas no escopo da própria classe e das classes que herdam os atributos.

private -> Permite acessar os atributos e métodos da classe apenas no escopo da própria classe.

*/

class Veiculo {
    private $modelo;
    public $cor;
    public $ano;

    protected function Andar() {
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
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function mostrarAcao(){
        $this->Andar();
    }
}

$carro = new Carro();
$carro->setModelo("HILUX");
echo $carro->mostrarAcao();
var_dump($carro);



?>