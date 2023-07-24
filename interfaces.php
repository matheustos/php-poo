<?php 

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{

    public function create(){
        // logica para criar uma noticia
    }
    public function read(){
        // logica para ler uma notícia
    }
    public function update(){
        // logica para editar uma notícia
    }
    public function delete(){
        // logica para deletar uma notícia
    }
}

// Obs: Me pareceu meio inútil já que eu poderia criar os métodos sem usar a interface




?>