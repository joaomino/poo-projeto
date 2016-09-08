<?php

require_once "ClienteInterface.php";

class Cliente implements ClienteInterface
{
    protected $nome;
    protected $endereço;
    private $nota;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function getEndereço()
    {
        return $this->endereço;
    }

    public function setEndereço($endereço)
    {
        $this->endereço = $endereço;
        return $this;
    }


    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
        return $this;
    }
}