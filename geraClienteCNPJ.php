<?php

function geraClienteCNPJ () {

    require_once "Cliente.php";
    require_once "ClientePessoaJuridica.php";
    require_once "ClienteInterface.php";

    $jnomes = array ("Empresa B","Empresa C","Empresa A","Empresa E", "Empresa D");
    $jenderecos = array ("Rua ABC, 123", "Rua DEF, 234", "Rua GHI, 345", "Rua JLM, 456", "Rua NOP, 567");
    $jnotas = array (1,3,5,4,2);
    $jcnpj = array ("111.111.111/0001-11", "222.222.222/0001-22","333.111.111/0001-11", "444.222.222/0001-22", "555.222.222/0001-22");

    for ($i = 0; $i < 5; $i++) {
        $clienteCNPJ[$i] = new ClientePessoaJuridica();
        $clienteCNPJ[$i]->setNome($jnomes[$i]);
        $clienteCNPJ[$i]->setEndereço($jenderecos[$i]);
        $clienteCNPJ[$i]->setNota($jnotas[$i]);
        $clienteCNPJ[$i]->setCnpj($jcnpj[$i]);
    }

    return $clienteCNPJ;
}