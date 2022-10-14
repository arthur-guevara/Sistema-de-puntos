<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white"><span><i class="fa-solid fa-list-check"></i></span> Acciones</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><span><i class="fa-solid fa-star"></i></span> Puntajes</a></li>
                        <li><a href="#" class="text-white"><span><i class="fa-solid fa-users"></i></span> Usuarios</a></li>
                        <li><a href="<?= base_url('logout') ?>" class="text-white"><span><i class="fa-solid fa-right-from-bracket"></i></span> Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center">
                <strong><?= session('name') ?></strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>