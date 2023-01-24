<?php

if (isset($_POST['paz'])) {
    $pazymiai = explode(',' , $_POST['paz']);
    $suma = 0;
    foreach ($pazymiai as $pazimys){
        $suma += trim($pazimys);
    }
    $vidurkis = $suma / sizeof($pazymiai);
    arsort($pazymiai);

    $sumos = [];
    foreach ($pazymiai as $pazimys) {
        $sumos[$pazimys] = (isset($sumos[$pazimys])) ? $sumos[$pazimys] + 1 : 1;
    }
    krsort($sumos);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masyvai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form method="post">
        <input type="text" name="paz">
        <button type="submit">Skaiciuoti</button>
    </form>
</div>
<?php
if (isset($vidurkis)) { ?>
<div>
    Jūsų pažymiai(mažėjimo tvarka):
<!--    --><?php //foreach ($pazymiai as $paimys){ echo "$pazimys, ";} ?>
<!--    ARBA-->
    <?= implode(", ", $pazymiai) ?>
</div>
<div> Pažymių vidurkis: <?=$vidurkis?> </div>
<div>
    Jus gavot: <br> <br>
    <?php foreach ($sumos as $k=>$v){?>
    <?=$k?>: <?=$v?> <br>
    <?php } ?>
</div>
<?php
}
?>
</body>
</html>