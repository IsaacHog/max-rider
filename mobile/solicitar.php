<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "links_header.php"; ?>
    <script src="solicitar-on-load.js" type="module"></script>
</head>

<body class="bg-light">
    <?php include("navbar-solicitar.php"); ?>

    <div class="container">
        <!-- Input fields -->
        <div class="col-12 mt-5">
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
                    <p class="mb-1">Name - Company</p>
                    <p id="address-start" name="address-start">Carrer de Bassegoda, 5, 08028, Varcelona</p>
                </div>

            </div>
            <div class="container border border-1 border-secondary-subtle rounded-4 mb-4 p-3 bg-white">

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

                <div class="d-flex flex-row bg-light rounded-4">
                    <div class="container col-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-seam fs-1 text-primary"></i>
                    </div>
                    <div class="container">
                        <p class="mb-1">ID del pedido: <b>2837462</b></p>
                        <p>Tamaño del paquete: <b>Pequeño</b></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="row align-items-center">
                        <a class="text-center fs-6 text-danger text-decoration-none" href="#" data-bs-toggle="modal"
                            data-bs-target="#myModal">Cancelar envío</a>
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

                    <div class="col-3 col-md-4 col-sm-5 ps-0 ps-xxl-4 ">
                        <h5 class="mb-0 fw-bold">Horario</h5>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="spinner-border me-2" role="status"></div>
                            <a class="text-center fs-6 text-black text-decoration-none ms-3" href="#">Buscando un
                                repartidor para ti</a>
                        </div>
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

                                <div class="row mt-3 d-flex">
                                    <div class="col-6 d-flex justify-content-center">
                                        <button class="btn btn-danger">
                                            <i class="bi bi-trash3"></i>
                                            Borrar solicitud
                                        </button>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <button class="btn text-black fw-bold border-0" data-bs-dismiss="modal">
                                            Cancelar
                                        </button>
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