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
    <script src="solicitar-on-load.js" type="module"></script>
</head>

<body class="bg-light">
    <?php include("navbar-solicitar.php"); ?>

    <div class="container-fluid row">
        <!-- Input fields -->
        <div class="col-6 col-lg-5 col-xl-4 col-xxl-3 mt-5">
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">
                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-geo-alt fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-3 col-md-4 col-sm-5 ps-0 ps-xxl-4 ">
                        <h5 class="mb-0 fw-bold">Recogida</h5>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-1">Name - Company</p>
                    <p id="address-start" name="address-start">Carrer de Bassegoda, 5, 08028, Varcelona</p>
                </div>

                <hr class="mt-1">

                <div class="row align-items-center mb-3">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-flag fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-3 col-md-4 col-sm-5 ps-0 ps-xxl-4 ">
                        <h5 class="mb-0 fw-bold">Entrega</h5>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-1">Name - Company (phone number)</p>
                    <p id="address-end" name="address-end">Carrer de Josep Campreciós, 36, 08028, Varcelona</p>
                </div>

                <div class="d-flex flex-row bg-light rounded-4 p-2">
                    <div class="container col-2">
                        <i class="bi bi-box-seam fs-2 text-primary"></i>
                    </div>
                    <div class="container">
                        <p class="mb-1">ID del pedido: <b>2837462</b></p>
                        <p>Tamaño del paquete: <b>Pequeño</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center">
                        <a class="text-center fs-6 text-danger text-decoration-none" href="#" data-bs-toggle="modal"
                            data-bs-target="#myModal">Cancelar envío</a>
                    </div>
                </div>

            </div>

            <!-- Horario -->
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">
                <div class="row align-items-center">
                    <div class="col-2 pe-0 col-xxl-1">
                        <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                            style="width: 33px; height: 32px;">
                            <i class="bi bi-clock fs-5 text-white"></i>
                        </div>
                    </div>

                    <div class="col-3 col-md-4 col-sm-5 ps-0 ps-xxl-4 ">
                        <h5 class="mb-0 fw-bold">Horario</h5>
                    </div>

                    <div class="col d-flex justify-content-end">
                        <div class="bg-light rounded-pill p-2">
                            <p class="fw-bold text-center m-0">Ahora</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row bg-light rounded-4 p-2 align-items-center mt-2">
                    <div class="container col-2 d-flex justify-content-center align-items-center">
                        <i class="bi bi-truck fs-2 text-primary"></i>
                    </div>
                    <div class="container d-flex flex-column">
                        <p class="mb-1">Repartidor: <b>Juan García</b></p>
                        <p class="mb-0">+34 666 666 666</p>
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
                                    <h5 class="col-11 mb-0 fw-bold">Eliminar solicitud de pedido</h5>
                                    <button class="col-1 btn border-0 d-flex justify-content-center align-items-center"
                                        data-bs-dismiss="modal">
                                        <i class="bi bi-x fs-3"></i>
                                    </button>
                                </div>

                                <div class="row">
                                    <p class="text-muted">Si quieres eliminar el pedido antes de que se te asigne un
                                        repartidor estas a
                                        tiempo. Solo tienes que confirmar la cancelación.</p>
                                </div>

                                <div class="row mt-3 justify-content-center">
                                    <button class="col-5 btn btn-danger">
                                        <i class="bi bi-trash3"></i>
                                        Borrar solicitud
                                    </button>
                                    <button class="col-3 btn text-black fw-bold border-0" data-bs-dismiss="modal">
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google maps -->
        <div class="col-6 col-lg-7 col-xl-8 col-xxl-9">
            <?php include "open-street-maps/maps.php"; ?>
        </div>
    </div>

</body>

</html>