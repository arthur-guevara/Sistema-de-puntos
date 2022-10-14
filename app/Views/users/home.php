<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.104.2">
    <title>SATEG 2022</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark " style="background-color: #3B3B3B;">
        <div class="container-fluid justify-content-end">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>">
                        Salir <span><i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm" style="background-color: #3B3B3B;">
            <img class="me-3" src="<?= base_url('img/sateg_blanco.png') ?>" alt="" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Evento de bienvenida</h1>
                <small>2022</small>
            </div>
        </div>

        <h1 class="text-center"><?= $name ?></h1>

        <div class="card text-center mt-3">
            <div class="card-header">
                Mis puntos
            </div>
            <div class="card-body">
                <h1 class="card-title" id="points">300</h1>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary" onclick="leerQR();">Escanea!</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="reader"></div>
            </div>
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="<?= base_url('js/functions.js') ?>"></script>
    <script src="<?= base_url('js/qr.min.js') ?>"></script>

    <script>
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
    </script>
</body>

</html>