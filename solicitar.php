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

    <div class="container-fluid row">
        <!-- Input fields -->
        <div class="col-6 col-lg-5 col-xl-4 col-xxl-3 mt-5">

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

                <div class="row">
                    <p class="mb-1">Alfredo Paez - Mi Tienda Restaurante</p>
                    <p>Carrer de Bassegoda, 5, 08028, Varcelona</p>
                </div>

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

                <div class="row">
                    <p class="mb-1">Carlos Rojas - Restaurante Entrega (+34 666 666 666)</p>
                    <p>Carrer de Josep Campreciós, 36, 08028, Varcelona</p>
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
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="Tamaño">
                    </div>
                    <div class="col-6 mb-3">
                        <input class="form-control border-1 rounded-5" placeholder="ID del pedido">
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
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5"
                                            placeholder="Piso, puerta o información adicional">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Nombre">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Apellidos">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-control border-1 rounded-5" placeholder="Compañía">
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control border-1 rounded-5" placeholder="Teléfono">
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control border-1 rounded-5" placeholder="Email">
                                    </div>
                                    <div class="col-6">

                                    </div>
                                    <div class="col-6 d-flex justify-content-end mt-3">
                                        <button class="btn btn-primary">Crear contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google maps -->
        <div class="col-6 col-lg-7 col-xl-8 col-xxl-9 mt-3">
            <?php include "open-street-maps/maps.php"; ?>
        </div>
    </div>

</body>

</html>