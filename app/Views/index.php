<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATEG 2022</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link href=" <?= base_url('bootstrap/css/login.css') ?>" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="<?= base_url('login/') ?>" method="POST">
            <img class="mb-4" src="<?= base_url('img/sateg_negro.png')?>" alt=""  height="75">
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
          
        </form>
    </main>



</body>

</html>