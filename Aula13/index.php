<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 13</title>
</head>
<body><h1>
    <?php
        // Programa Principal
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $c = new Cachorro();
        $c->reagirFrase("Olá");             //Abanar e latir
        $c->reagirFrase("Vai apanhar");     //Rosnar
        $c->reagirHora(11, 45);             //Abanar
        $c->reagirHora(21, 00);             //Ignorar
        $c->reagirDono(true);               //Abanar
        $c->reagirDono(false);              //Rosnar e latir
        $c->reagirIdadePeso(2, 12.5);       //Latir 
        $c->reagirIdadePeso(17, 4.5);       //Rosnar
    ?>
</body>
</html>