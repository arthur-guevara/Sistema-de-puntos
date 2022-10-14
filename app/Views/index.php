<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATEG 2022</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href=" <?= base_url('bootstrap/css/login.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('img/favicon.png')?>">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="<?= base_url('login/') ?>" method="POST">
            <img class="mb-4" src="<?= base_url('img/sateg_negro.png') ?>" alt="" height="75">
            <h1 class="h3 mb-3 fw-normal">Ingresa tus datos</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required autocomplete="off">
                <label for="username">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="off">
                <label for="password">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
            <?php if (!is_null($mensaje)) : ?>
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong><?= $mensaje?></strong> Intenta de nuevo.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </form>
    </main>


<script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>