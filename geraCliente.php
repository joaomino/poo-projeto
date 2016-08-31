<?php

function geraCliente () {

    require_once "Cliente.php";

    $nomes = array ("João","Maria","José","Moisés","Dinho","Pedro","Madalena","Zeca","Gabriel", "Mumu");
    $sobrenomes = array ("do Caminhã", "do Carmo", "Bonifácio", "Mos", "Diniz", "Peterson", "da Costa Xavier", "Carioca", "Medina", "Doce de Leite");

    for ($i = 0; $i < 10; $i++) {
        $cliente[$i] = new Cliente($nomes[$i],$sobrenomes[$i],00100200345,"Rua da Esperança,123, Coimbra, Portugal");

    }

    return $cliente;
}