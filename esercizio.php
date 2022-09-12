<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div></div>
    <?php
    $parola=$_POST["word"];
    $newParola="lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quo!";
    $parolaCensurata = str_replace($parola, '***', $newParola);
    $lunghezzaTesto = strlen($parolaCensurata);
    ?>
    <p>
        
    <?php echo $parolaCensurata ?> 

    </p>

    <p>
       la lunghezza è: <?php echo $lunghezzaTesto ?> caratteri
    </p>
</body>
</html>