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

// GETTERS e SETTERS

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha(){
        return $this->email;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "1234"){
            echo "<br>";
            echo "Login realizado com sucesso.";
            }else{
                echo "Email e/ou senha incorreto(s).";
            }
    }
}

$login = new Login();
$login->setemail("teste@teste.com");
$login->setSenha("1234");
$login->Logar();

?>