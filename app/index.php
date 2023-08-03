<?php 
// SETS

require_once '../vendor/autoload.php';

$produto = new App\Model\Produto();
$produto->setId(1);
$produto->setNome('Notebook Samsung');
$produto->setDescricao('i3, 4gb');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(1);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;


?>