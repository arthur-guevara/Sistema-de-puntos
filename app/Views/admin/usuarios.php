<!doctype html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="<?= base_url('img/favicon.png') ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>SATEG - Administrador</title>
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <?= $header ?>
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <table id="puntuacion" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre(s)</td>
                                <td>Paterno</td>
                                <td>Materno</td>
                                <td>Usuario</td>
                                <td>Contraseña</td>
                                <td>Adscripción</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) : ?>
                                <tr>
                                    <td><?= $d['id_usuario'] ?></td>
                                    <td><?= $d['nombre'] ?></td>
                                    <td><?= $d['apaterno'] ?></td>
                                    <td><?= $d['amaterno'] ?></td>
                                    <td><?= $d['usuario'] ?></td>
                                    <td><?= $d['pass'] ?></td>
                                    <td><?= $d['adscripcion'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <?= $footer ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/functions.js') ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script>
        let opt = {
            "scrollX": true,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json",
                responsive: true
            }
        }
        renderTable('puntuacion', opt);
    </script>
</body>

</html>