<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK 1 - 23 Aprile<</title>
</head>
<body>
    <h1>PHP SNACK 1</h1>

    <?php
        $msg = "vuoto";
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if (strlen($name) > 3 && (strpos($mail, "@") && strpos($mail, ".")) && is_numeric($age)) {
            $msg = "Accesso Riuscito";
        } else {
            $msg = "Accesso Negato";
        }

    ?>

    <p><?php echo $msg; ?></p>


</body>
</html>