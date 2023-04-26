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
                            <a class="nav-link fw-bold" href="mi_cuenta.php">Mi cuenta</a>
                            <a class="nav-link fw-bold text-primary border border-2 border-primary rounded-pill" href="facturación.php">Facturación</a>
                            <a class="nav-link fw-bold" href="mis_contactos.php">Mis contactos</a>
                            <a class="nav-link fw-bold" href="soporte.php">Soporte</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--Border with content-->
            <div class="col-10 border border-2 rounded-4 p-5">
                <div class="row mb-3">
                    <h4 class="fw-bold">Facturación</h4>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Profesional o personal">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Nombre de la empresa">
                    </div>
                    <div class="col-6">
                        <input class="form-control border-1 rounded-4" placeholder="Dirección">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="NIF">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="País">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Ciudad">
                    </div>
                    <div class="col-3">
                        <input class="form-control border-1 rounded-4" placeholder="Código Postal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex">
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn btn-primary rounded-4" href="">Guardar cambios</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10 border border-2 rounded-4 p-5 mt-3">
                <div class="row">
                    <h4 class="fw-bold">Tarjeta de crédito</h4>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>