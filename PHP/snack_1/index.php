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
        $basketGames = [
            [
                "homeTeam" => "Boston Celtics",
                "awayTeam" => "Phoenix Suns",
                "homePoints" => 99,
                "awayPoints" => 86
            ],
            [
                "homeTeam" => "Milwaukee Bucks",
                "awayTeam" => "Philadelphia 76ers",
                "homePoints" => 124,
                "awayPoints" => 117
            ],
            [
                "homeTeam" => "Orlando Magic",
                "awayTeam" => "New Orleans Pelicans",
                "homePoints" => 100,
                "awayPoints" => 135
            ],
            [
                "homeTeam" => "San Antonio Spurs",
                "awayTeam" => "Detroit Pistons",
                "homePoints" => 106,
                "awayPoints" => 91
            ],
            [
                "homeTeam" => "Chicago Bulls",
                "awayTeam" => "Charlotte Hornets",
                "homePoints" => 108,
                "awayPoints" => 91
            ],
            [
                "homeTeam" => "Dallas Mavericks",
                "awayTeam" => "Los Angeles Lakers",
                "homePoints" => 115,
                "awayPoints" => 110
            ],
        ]

    ?>

    <?php
      for ($i = 0; $i < count($basketGames); $i++) {
        echo "<p>" . $basketGames[$i]["homeTeam"] . " - " . $basketGames[$i]["awayTeam"] . " | " . $basketGames[$i]["homePoints"] .  " - " . $basketGames[$i]["awayPoints"] . "</p>";
        }
    ?>


</body>
</html>