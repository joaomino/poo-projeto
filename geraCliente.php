<?php

function geraCliente () {

    require_once "Cliente.php";
    require_once "ClientePessoaFisica.php";
    require_once "ClientePessoaJuridica.php";

/*
    $nomes = array ("João","Maria","José","Moisés","Dinho","Pedro","Madalena","Zeca","Gabriel", "Mumu");
    $sobrenomes = array ("do Caminhã", "do Carmo", "Bonifácio", "Mos", "Diniz", "Peterson", "da Costa Xavier", "Carioca", "Medina", "Doce de Leite");

    for ($i = 0; $i < 10; $i++) {
        $cliente[$i] = new Cliente($nomes[$i],$sobrenomes[$i],00100200345,"Rua da Esperança,123, Coimbra, Portugal");

    }

    return $cliente;
*/
    $clienteCPF = new ClientePessoaFisica("João", "Mino", "Rua da Esperança, 123");
    $clienteCPF->setCpf("00100200345");

    $clienteCNPJ = new ClientePessoaJuridica("Empresa", "Grandiosa", "Rua Empresarial, 456");
    $clienteCNPJ->setCnpj("100.200.300/0001-45");

    return $cliente;
}