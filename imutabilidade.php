<?php
class Pessoa {
    protected $nome;
    protected $idade;
    public function getNome() {return $this->nome;}
    public function getIdade() {return $this->idade;}
}
$pessoa = new Pessoa("João", 25);
$pessoa->nome = "Maria"; 
echo $pessoa->getNome(); 
?>