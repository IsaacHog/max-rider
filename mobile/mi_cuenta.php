<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "links_header.php"; ?>
</head>

<body class="bg-light">
    <?php include("mi_cuenta_navbar.php"); ?>

    <div class="container mt-5">
        <!--Border with content-->
        <div class=" border border-2 rounded-4 p-3 mb-5">
            <div class="row mb-3">
                <h4 class="fw-bold">Mi cuenta</h4>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <input class="form-control border-1 rounded-4" placeholder="Empresa o particular">
                </div>
            </div>
            <div class="row mb-3">
                <h5 class="fw-bold">Información empresa</h5>
            </div>
            <div class="row mb-3">
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Nombre de la empresa">
                </div>
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Sector">
                </div>
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Envíos mensuales">
                </div>
            </div>
            <div class="row mb-3">
                <h5 class="fw-bold">Información general</h5>
            </div>
            <div class="row">
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Nombre">
                </div>
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Ciudad">
                </div>
                <div class="col-12 mb-2">
                    <input class="form-control border-1 rounded-4" placeholder="Teléfono">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <input class="form-control border-1 rounded-4" placeholder="Email">
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-4">
                    <a class="btn btn-primary rounded-4" href="">&nbsp Guardar cambios &nbsp</a>
                </div>
                <div class="col-12 d-flex flex-column align-items-center">
                    <p>¿Quieres cambiar tu contraseña?</p>
                    <a class="text-decoration-none" href="#">&nbsp Restrablecer contraseña</a>
                </div>
            </div>
        </div>
        </div>
    </div>

</body>

</html>