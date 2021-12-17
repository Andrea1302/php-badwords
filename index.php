<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stringaProva = "Il PHP è un linguaggio di programmazione tanto rivoluzionario quanto semplice: non è tra i più moderni, ma, a distanza di anni dalla sua nascita, continua a godere di grande popolarità. Secondo gli ultimi dati riportati da w3techs, PHP è infatti utilizzato dal 78% dei siti, tra cui i noti Facebook, WordPress e Wikipedia.";
        $stringaCensurata = str_replace("linguaggio", "***", $stringaProva);
    ?>


    <h1> <?php echo $stringaProva ?>   </h1>

    <h3>
        <?php echo "la lunghezza del titolo:  è: " . strlen($stringaProva) ?>
    </h3>

    <h5>
        <?php echo $stringaCensurata ?>
    </h5>
</body>
</html>