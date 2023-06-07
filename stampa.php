<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa</title>
</head>
<body>

    <?php

        $paragrafo = $_GET["paragrafo"] ;
        $parola = $_GET["parolaX"];
        $lunghezzaParagfrafo = strlen($paragrafo) ;

        $paragrafox = str_replace (
            $parola ,
            "***" ,
            $paragrafo ,
        )

    ?>

    <main>
        <h1>PARAGRAFO</h1>
        <p> <?php echo $paragrafo ?> </p>


        <h1>PAROLA DA SOSTITUIRE</h1>
        <p> <?php echo $parola ?> </p>

        <h1>PARAGRAFO CENSURATO</h1>
        <p> <?php echo $paragrafox ?> </p>

        <h1>LUNGHEZZA PARAGRAFO</h1>
        <p>il paragrafo è lungo <?php echo $lunghezzaParagfrafo ?> caratteri </p>


    </main>

    
</body>
</html>