<?php

if (isset($_POST['temp'])) {
    $temperatura = explode(',', $_POST['temp']);
    $viso = 0;
    $isviso = count($temperatura);

    foreach ($temperatura as $temperaturos) {
        $viso += $temperaturos;
    }
    $vidurkis = round($viso / sizeof($temperatura), 2);
    sort($temperatura);

    $results = array_unique($temperatura);
    sort($results);
    $min = array();
    for ($i=0; $i<2; $i++){
        $min[] = array_shift($results);
    }

    $results = array_unique($temperatura);
    sort($results);
    $first = array_pop($results);
    $second = array_pop($results);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="menesiai.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigacija</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ND_temperatura.php">Temperatūra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ND_menesiai.php">Mėnesiai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--<div class="wrapper">-->
<!--    <div class="header">-->
<!--        <h1>Temperatūros skaičiuoklė</h1>-->
<!--        <div class="brd">-->
<!--            <form action="tempSkaiciavimas.php" method="post" class="form"></form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="rezult text-center">
    <h3 id="text">Rezultatas</h3><br>
    <span id="span">
        Temperatūra: <?=implode(",", $temperatura) . "<br>";?>
        <?="Vidutinė temperatūra: " . $vidurkis . "<br>";?>
        <?="Viso: " . $viso . "<br>";?>
        <?="Dvi mažiausios temperatūros: " . implode(", ", $min) . "<br>";?>
        <?="Dvi didžiausios temperatūros: " . $first . "," .$second; "<br>";?>
    </span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
