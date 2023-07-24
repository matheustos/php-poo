<?php 
class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Rodrigo Oliveira";
$cliente->endereco = "Rua xxx, Número: 177";

$pedido = new Pedido();
$pedido->numero = "231";
$pedido->cliente = $cliente;

$dados = array(
    'numero'=>$pedido->numero,
    'nome_cliente'=>$pedido->cliente->nome,
    'endereco_cliente'=>$pedido->cliente->endereco
);

var_dump($dados);


?>