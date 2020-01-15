<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        // $c1->ponta = 0.5;
        // $c1->carga = 99;
        // $c1->tamapda = true;
        $c1->rabiscar();
        $c1->tampar();
        var_dump($c1);
    ?>
    </pre>
</body>
</html>