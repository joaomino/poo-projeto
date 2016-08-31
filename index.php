<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <br />
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="ordem"><h4>Ordem Alfabética</h4></label><br />
                <select id=ordem name="ordenar" class="custom-select">
                    <option value="sort">Ascendente</option>
                    <option value="rsort">Descendente</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Ordenar">
                <br /><br />
            </div>
        </form>
        <?php

        require_once "geraCliente.php";

        $cliente = geraCliente();
        if (isset($_POST['ordenar'])) {
            $_POST['ordenar']($cliente);
        }
        for ($i = 0; $i < 10; $i++) {
            echo '<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo' . $i . '">' . $i . ' ' . $cliente[$i]->nome. '</button><br />';
            echo '<div id="demo' . $i . '" class="collapse">Nome: ' . $cliente[$i]->nome . '<br />
            Sobrenome: ' . $cliente[$i]->sobrenome . '<br />
            CPF: ' . $cliente[$i]->cpf . '<br />
            Endereço: ' . $cliente[$i]->endereço . '<br />
            </div><br />';

        }
        ?>
    </div>
</body>
</html>




