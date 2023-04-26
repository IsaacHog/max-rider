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
                            <a class="nav-link fw-bold text-primary border border-2 border-primary rounded-pill" href="mis_contactos.php">Mis contactos</a>
                            <a class="nav-link fw-bold" href="soporte.php">Soporte</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--Border with content-->
            <div class="col-10 border border-2 rounded-4 p-5">
                <div class="row mb-3">
                    <div class="col-6">
                        <h4 class="fw-bold">Mis contactos</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn btn-primary rounded-4" href="">&nbsp Añadir &nbsp</a>
                    </div>
                </div>
                <!--Border inside border-->
                <div class="border border-1 border-secondary-subtle rounded-4 mt-5">

                    <!--Row 1-->
                    <div class="row ms-3 mt-4">
                        <!--Row 1, col 1-->
                        <div class="col-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1"></label>
                            </div>
                        </div>
                        <!--Row 1, col 2-->
                        <div class="col-1">
                          <p class="fw-bold">Nombre</p>
                        </div>
                        <!--Row 1, col 3-->
                        <div class="col-1">
                          <p class="fw-bold">Empresa</p>
                        </div>
                        <!--Row 1, col 4-->
                        <div class="col-3">
                          <p class="fw-bold">Email</p>
                        </div>
                        <!--Row 1, col 5-->
                        <div class="col-2">
                          <p class="fw-bold">Teléfono</p>
                        </div>
                        <!--Row 1, col 6-->
                        <div class="col-2">
                          <p class="fw-bold">Dirección</p>
                        </div>
                        <!--Row 1, col 7-->
                        <div class="col-1">
                        </div>
                    </div>
                    <hr>

                    <!--Row 2-->
                    <div class="row ms-3 mt-4">
                        <!--Row 2, col 1-->
                        <div class="col-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1"></label>
                            </div>
                        </div>
                        <!--Row 2, col 2-->
                        <div class="col-1">
                          <p class="">Juan García</p>
                        </div>
                        <!--Row 2, col 3-->
                        <div class="col-1">
                          <p class="">Empresa Ejemplo</p>
                        </div>
                        <!--Row 2, col 4-->
                        <div class="col-3">
                          <p class="">ejemplo@ejemplo.com</p>
                        </div>
                        <!--Row 2, col 5-->
                        <div class="col-2">
                          <p class="">+34 666 666 666</p>
                        </div>
                        <!--Row 2, col 6-->
                        <div class="col-3">
                          <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                        </div>
                        <!--Row 2, col 7-->
                        <div class="col-1 d-flex justify-content-center">
                            <i class="bi bi-arrow-right text-primary fs-3"></i>
                        </div>
                    </div>
                    <hr>

                    <!--Row 3-->
                    <div class="row ms-3 mt-4">
                        <!--Row 3, col 1-->
                        <div class="col-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1"></label>
                            </div>
                        </div>
                        <!--Row 3, col 2-->
                        <div class="col-1">
                          <p class="">Juan García</p>
                        </div>
                        <!--Row 3, col 3-->
                        <div class="col-1">
                          <p class="">Empresa Ejemplo</p>
                        </div>
                        <!--Row 3, col 4-->
                        <div class="col-3">
                          <p class="">ejemplo@ejemplo.com</p>
                        </div>
                        <!--Row 3, col 5-->
                        <div class="col-2">
                          <p class="">+34 666 666 666</p>
                        </div>
                        <!--Row 3, col 6-->
                        <div class="col-3">
                          <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                        </div>
                        <!--Row 2, col 7-->
                        <div class="col-1 d-flex justify-content-center">
                            <i class="bi bi-arrow-right text-primary fs-3"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>