<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h1>Exemplo de PHP</h1>
    <?php 
        //Mudar a time zone do servidor para GMT-3
        date_default_timezone_set('America/Sao_Paulo');
        echo "hoje é dia ".date("d"). " de ".date("M"). " de ".date("Y");
        echo "<br>";

        echo "Agora são ".date("H"). " horas e ".date("i"). " minutos";
        echo "<br>";

        echo "GMT".date("T");

    ?>

</body>

</html>