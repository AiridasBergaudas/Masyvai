<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperatūra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <div class="wrapper text-center">
                <div class="header">
                    <div class="fw-bold">Uždavinys: Padarykite programą, kurioje turėtumėme vieną įvedimo lauką. Į šį lauką įvestumėte temperatūros nuoskaitas.</div>
                    <h1 class="mt-5">Temperatūros skaičiuoklė</h1>
                    <div class="brd ">
                        <form action="tempSkaiciavimas.php" method="post" class="form">
                            <input class="form-control mt-4 col-6 border border-dark" type="text" name="temp" placeholder="galite rašyti">
                            <button type="submit" class="btn btn-outline-secondary mb-3 mt-5">Skaičiuoti</button>
                        </form>
                        <div class="rezult">
                            <h3 id="text">Rezultatas: <span>--.--</span></h3>
                        </div>
                    </div>
                </div>
            </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
