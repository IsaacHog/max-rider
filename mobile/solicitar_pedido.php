<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "links_header.php"; ?>
</head>

<body class="bg-light">
    <?php include("navbar.php"); ?>

    <div class="container-fluid mt-4">
        <!-- Input fields -->
        <div class="col">

            <!-- Recogida -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">
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

                <div class="row mb-2">
                    <div class="position-relative w-100">
                        <input type="text"
                            class="btn border border-1 rounded-5 text-start bg-white search-input form-control"
                            id="query-start" name="query-start" placeholder="Seleccionar punto de recogida">
                        <button type="button"
                            class="btn btn-clear-start position-absolute top-50 end-0 translate-middle-y">
                            <i class="bi bi-x"></i>
                        </button>
                        <ul class="list-group position-absolute w-100 bg-white" id="search-results-start"
                            style="z-index:999"></ul>
                    </div>
                </div>

                <div class="row">
                    <div class="row align-items-center">
                        <small class="form-text text-muted text-center fs-6">Crear un
                            <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#myModal">nuevo contacto</a>
                        </small>
                    </div>
                </div>
            </div>

            <!-- Entrega -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">
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

                <div class="row mb-2">
                    <div class="position-relative w-100">
                        <input type="text"
                            class="btn border border-1 rounded-5 text-start bg-white search-input form-control"
                            id="query-end" name="query-end" placeholder="Buscar una dirección">
                        <button type="button"
                            class="btn btn-clear-end position-absolute top-50 end-0 translate-middle-y">
                            <i class="bi bi-x"></i>
                        </button>
                        <ul class="list-group position-absolute w-100 bg-white" id="search-results-end"
                            style="z-index:999"></ul>
                    </div>
                </div>

                <div class="row">
                    <div class="row align-items-center mb-3">
                        <small class="form-text text-black fs-6 fw-bold">Persona de contacto</small>
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Nombre">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Apellidos">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Compañía">
                    </div>
                    <div class="col-12 mb-3">
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
                        <small class="form-text text-black fs-6 fw-bold">Detalles del pedido</small>
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Tamaño">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="ID del pedido">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Información del pedido">
                    </div>
                </div>
            </div>

            <!-- Horario -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">
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
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Tamaño">
                    </div>
                    <div class="col-12 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="ID del pedido">
                    </div>
                </div>
            </div>

            <!--Solicitar-->
            <div class="container border border-1 border-secondary-subtle mb-4 p-3 bg-white">
                <div class="row align-items-center">
                    <div class="col-1 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto d-flex justify-content-center align-items-center" style="width: 33px; height: 32px;">
                            <i class="bi bi-cash-coin fs-5 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-10">
                                <p class="mb-0 ms-3" style="color:grey">Total (sin IVA):</p>
                            </div>
                            <div class="col-2">
                                <p class="mb-0">7,20€</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xxl-1 d-flex justify-content-end">
                        <a class="btn btn-primary" href="solicitar.php">Solicitar</a>
                    </div>
                </div>
            </div>

            <!-- pop up -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!--Pop up body-->
                        <div class="modal-body">
                            <div class="container rounded-5 p-1">
                                <div class="row align-items-center mb-3">
                                    <div class="col-2 pe-0 col-xxl-1">
                                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                                            style="width: 33px; height: 32px;">
                                            <i class="bi bi-person-plus-fill fs-5 text-white"></i>
                                        </div>
                                    </div>

                                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                                        <h5 class="mb-0 fw-bold">Nuevo punto de recogida</h5>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="position-relative w-100">
                                        <input type="text"
                                            class="btn border border-1 rounded-5 text-start bg-white search-input form-control"
                                            id="query-end" name="query-end" placeholder="Buscar una dirección">
                                        <button type="button"
                                            class="btn btn-clear-end position-absolute top-50 end-0 translate-middle-y">
                                            <i class="bi bi-x"></i>
                                        </button>
                                        <ul class="list-group position-absolute w-100 bg-white" id="search-results-end"
                                            style="z-index:999"></ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Piso, puerta o información adicional">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Nombre">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Apellidos">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Compañía">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Teléfono">
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control border-1 rounded-5" placeholder="Email">
                                    </div>
                                    <div class="col-6">

                                    </div>
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                      <button class="btn btn-primary">Crear contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>