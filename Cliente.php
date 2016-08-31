<?php

class Cliente
{
    public $nome;
    public $sobrenome;
    public $cpf;
    public $endereço;

    public function __construct($nome, $sobrenome, $cpf, $endereço)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->endereço = $endereço;
    }

}