<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "links_header.php"; ?>
</head>

<body class="bg-light">
    <?php include("navbar.php"); ?>

    <div class="container-fluid row">
        <!-- Input fields -->
        <div class="col-4">

            <!-- Recogida -->
            <div class="container border border-1 border-secondary rounded-4 mb-4 p-3">
                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-geo-alt fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-2">
                        <h5 class="mb-0 fw-bold">Recogida</h5>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle border border-1" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Seleccionar punto de recogida
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Contacto 1</a>
                                <a class="dropdown-item" href="#">Contacto 2</a>
                                <a class="dropdown-item" href="#">Contacto 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small class="form-text text-muted text-center fs-6">Crear un <a href="#">nuevo
                                contacto</a></small>
                    </div>
                </div>
            </div>

            <div class="container border border-1 border-secondary rounded-4 mb-4">
                <p>dasd</p>
            </div>

            <div class="container border border-1 border-secondary rounded-4 mb-4">
                <p>dasd</p>
            </div>
        </div>

        <!-- Google maps -->
        <div class="col-8 bg-secondary">
            <p>placeholder</p>
        </div>
    </div>

</body>

</html>