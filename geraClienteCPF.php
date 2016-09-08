<?php

function geraClienteCPF () {

    require_once "Cliente.php";
    require_once "ClientePessoaFisica.php";
    require_once "ClienteInterface.php";

    $fnomes = array ("João do Caminhão","Maria do Carmo","José Bonifácio","Moisés Mos","Dinho Diniz");
    $fenderecos = array ("Rua ABC, 123", "Rua DEF, 234", "Rua GHI, 345", "Rua JLM, 456", "Rua NOP, 567");
    $fnotas = array (1,3,5,4,2);
    $fcpfs = array ("111.111.111-11", "222.222.222-22","333.111.111-11", "444.222.222-22", "555.222.222-22");

    for ($i = 0; $i < 5; $i++) {
        $clienteCPF[$i] = new ClientePessoaFisica();
        $clienteCPF[$i]->setNome($fnomes[$i]);
        $clienteCPF[$i]->setEndereço($fenderecos[$i]);
        $clienteCPF[$i]->setNota($fnotas[$i]);
        $clienteCPF[$i]->setCpf($fcpfs[$i]);
    }

    return $clienteCPF;
}