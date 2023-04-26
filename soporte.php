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
                            <a class="nav-link fw-bold" href="facturación.php">Facturación</a>
                            <a class="nav-link fw-bold" href="mis_contactos.php">Mis contactos</a>
                            <a class="nav-link fw-bold text-primary border border-2 border-primary rounded-pill" href="soporte.php">Soporte</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--Border with content-->
            <div class="col-10 border border-2 rounded-4 p-5 mb-3">
                <!--Header-->
                <div class="row mb-3">
                    <div class="col-6">
                        <h4 class="fw-bold">Preguntas frecuentes</h4>
                    </div>
                </div>
                <!--Lorem ipsum texts-->
                <div class="row mb-3">
                    <div class="col-12 border border-1 rounded-4 d-flex">
                        <div class="col-6 mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-6 mt-3 d-flex justify-content-end">
                            <i class="bi bi-arrow-down fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 border border-1 rounded-4 d-flex">
                        <div class="col-6 mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-6 mt-3 d-flex justify-content-end">
                            <i class="bi bi-arrow-down fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 border border-1 rounded-4 d-flex">
                        <div class="col-6 mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-6 mt-3 d-flex justify-content-end">
                            <i class="bi bi-arrow-down fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 border border-1 rounded-4 d-flex">
                        <div class="col-6 mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-6 mt-3 d-flex justify-content-end">
                            <i class="bi bi-arrow-down fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 border border-1 rounded-4 d-flex">
                        <div class="col-6 mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-6 mt-3 d-flex justify-content-end">
                            <i class="bi bi-arrow-down fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Second border with content-->
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10 border border-2 rounded-4 p-5">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="fw-bold mb-0">Soporte</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <i class="bi bi-envelope fs-2 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>