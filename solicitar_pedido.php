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
        <div class="col-6 col-lg-5 col-xl-4 col-xxl-3 mt-5">

            <!-- Recogida -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3">
                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-geo-alt fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                        <h5 class="mb-0 fw-bold">Recogida</h5>
                    </div>
                </div>


                <!--- <button class="btn dropdown-toggle border border-1 rounded-5 text-muted text-start" data-bs-toggle="dropdown"> -->


                <div class="dropdown row m-2">
                    <button class="btn dropdown-toggle border border-1 rounded-5 text-muted text-start bg-white" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seleccionar punto de recogida
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center">
                        <small class="form-text text-muted text-center fs-6">Crear un
                            <a href="#">nuevo contacto</a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- Entrega -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3">
                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-flag fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                        <h5 class="mb-0 fw-bold">Entrega</h5>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="input-group border rounded-5 bg-white">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0">
                                <i class="bi bi-search text-primary fs-5"></i>
                            </span>
                        </div>
                        <input class="form-control border-0" placeholder="Buscar una dirección">
                    </div>
                </div>

                <div class="row">
                    <div class="row align-items-center mb-3">
                        <small class="form-text text-black fs-6">Persona de contacto</small>
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Nombre">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Apellidos">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Compañía">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Teléfono">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Email">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Piso, puerta e información">
                    </div>
                </div>

                <div class="row">
                    <div class="row align-items-center mb-3">
                        <small class="form-text text-black fs-6">Detalles del pedido</small>
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Tamaño">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="ID del pedido">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Información del pedido">
                    </div>
                </div>
            </div>

            <!-- Horario -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3">
                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-clock fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                        <h5 class="mb-0 fw-bold">Horario</h5>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Entregar más tarde">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Tamaño">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="ID del pedido">
                    </div>
                </div>
            </div>
        </div>

        <!-- Google maps -->
        <div class="col-6 col-lg-7 col-xl-8 col-xxl-9 bg-secondary mt-3">
            <p>placeholder</p>
        </div>
    </div>

</body>

</html>