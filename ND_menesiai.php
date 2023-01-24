<?php

$menesiai = array(1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Geguzis', 6=>'Birzelis',7=>'Liepa',
    8=>'Rugpjutis', 9=>'Rugsejis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array(1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30,12=>31,);

$men31 = [];
$men30 = [];
$men28 = [];

foreach ($menesiai as $k => $v){
    if ($menesiuDienos[$k] == 31){
        $men31[] = $v;
    }
    else if ($menesiuDienos[$k] == 30){
        $men30[] = $v;
    }
    else {
        $men28[] = $v;
    }
}
$days = [];

    $days = array_sum($menesiuDienos);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mėnesiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="menesiai.css">
</head>
<body>
<!--Neveikia<div> --><?php //=$men30?><!--</div>-->

<nav class="navbar navbar-expand lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigacija</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ND_temperatura.php">Temperatūra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="ND_menesiai.php">Mėnesiai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <div class="wrapper text-center">
            <div class="header">
                <div class="fw-bold">Uždavinys: turime du masyvus, parašykite programą kuri atspausdintų, ką matote žemiau:</div><br>
                <h1>Mėnesių skaičiavimas</h1>
                <div class="brd">
                    <form action="" method="post" class="form"></form>
                <div class="rezult">
                    <h3 id="text">Prašau:</h3>
                    <b>1.</b><br>
                    <?="Metuose yra " .count($men31). " mėnesiai turintys 31 dienų (" .implode(", ", $men31). ") <br>"; ?>
                    <?="Metuose yra " .count($men30). " mėnesiai turintys 30 dienų (" .implode(", ", $men30). ") <br>"; ?>
                    <?="Metuose yra " .count($men28). " mėnuo turintys 28 dienas (" .implode(", ", $men28). ") <br>"; ?>
                    <b>2.</b><br>
                    <?="Viso metuose yra " .$days. " dienos :<br>"; ?>
                    <?php foreach ($menesiai as $k => $v) {
                        if ($k <= 12) {
                            echo $v. " yra " . $k . " menuo jis turi " . $menesiuDienos[$k] . "d. <br>";
                        }
                        else {
                            break;
                        }
                    }; ?>

                </div>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

