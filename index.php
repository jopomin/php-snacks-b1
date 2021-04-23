<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS - 23 Aprile<</title>
</head>
<body>
    <h1>PHP SNACKS - 23 Aprile</h1>

    <?php
        $par = "Ha appena compiuto cinquant’anni, ma proprio ora le viene chiesto l’impegno maggiore. Le foto in bianco e nero di quel 22 aprile 1970, prima Giornata mondiale della Terra, raccontano di una gioventù americana scesa in strada (furono decine di milioni in tutti gli States) per chiedere alla politica più attenzione verso il Pianeta. Erano gli anni del Vietnam e della contestazione, di ragazze e ragazzi che sognavano di cambiare il mondo marciando dietro slogan e striscioni. Molti la considerano la data di nascita dell’ambientalismo moderno, che ha certamente contribuito ad accrescere la consapevolezza dell’opinione pubblica, ma non si può dire che abbia cambiato radicalmente il nostro modo di vivere, di consumare, di produrre energia, di sfruttare la Natura. Tanto che 51 anni dopo ci ritroviamo a sperare che l'Earth Day segni un nuovo inizio, rappresenti una svolta soprattutto nell’affrontare la principale emergenza ambientale della nostra era: quella climatica.";
        $parLength = strlen($par);
        $censPar = str_replace($_GET["badword"], "***", $par);
        $censParLength = strlen($censPar);
    ?>

    <h2>Paragrafo Base - Lunghezza: <?php echo $parLength;?></h2>
    <p><?php echo $par;?></p>
    <h2>Paragrafo Censurato - Lunghezza: <?php echo $censParLength;?></h2>
    <p><?php echo $censPar;?></p>


</body>
</html>