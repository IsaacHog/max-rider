<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "links_header.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script type="text/javascript" src="https://rawgit.com/jieter/Leaflet.encoded/master/Polyline.encoded.js"></script>
</head>

<body class="bg-light">
    <?php include("navbar.php"); ?>

    <div class="container mt-5">
        <div class="row">
            <!--Little side navBar-->
            <div class="col-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid flex-column">
                        <div class="navbar-nav flex-column">
                            <a class="nav-link text-primary border border-2 border-primary rounded-pill fw-bold" href="#">Mi cuenta</a>
                            <a class="nav-link fw-bold" href="facturación.php">Facturación</a>
                            <a class="nav-link fw-bold" href="mis_contactos.php">Mis contactos</a>
                            <a class="nav-link fw-bold" href="soporte.php">Soporte</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--Border with content-->
            <div class="col-10 border border-2 rounded-4 p-5">
                <div class="row mb-3">
                    <h4 class="fw-bold">Mi cuenta</h4>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Empresa o particular">
                    </div>
                </div>
                <div class="row mb-3">
                    <h5 class="fw-bold">Información empresa</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Nombre de la empresa">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Sector">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Envíos mensuales">
                    </div>
                </div>
                <div class="row mb-3">
                    <h5 class="fw-bold">Información general</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Nombre">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Ciudad">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Teléfono">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex">
                        <p>¿Quieres cambiar tu contraseña?</p>
                        <a class="text-decoration-none" href="#">&nbsp Restrablecer contraseña</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn btn-primary rounded-4" href="">Guardar cambios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>