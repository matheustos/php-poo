<?php 

// classe abstrada serve como um modelo para outras classes

// não é possivel instanciar um classe abstrata

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);

    abstract protected function Depositar($d);
}

class Santander extends Banco{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

/*class Bradesco extends Banco{

    public function Sacar(){
        echo "Sacou";
    }

    public function Depositar(){
        echo "Depositou";
    }

}*/

$santander = new Santander();
$santander->setSaldo(5000);
$santander->Sacar(2000);
$santander->Depositar(1000);
echo "<hr> Saldo: ".$santander->getSaldo();








?>