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
    <script src="solicitar-on-load.js"></script>
</head>

<body class="bg-light">
    <?php include("navbar.php"); ?>

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

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                        <h5 class="mb-0 fw-bold">Recogida</h5>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-1">Alfredo Paez - Mi Tienda Restaurante</p>
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

                    <div class="col-10 ps-0 col-xxl-11 ps-xxl-4">
                        <h5 class="mb-0 fw-bold">Entrega</h5>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-1">Carlos Rojas - Restaurante Entrega (+34 666 666 666)</p>
                    <p id="address-end" name="address-end">Carrer de Josep Campreciós, 36, 08028, Varcelona</p>
                </div>

                <div class="d-flex flex-row bg-ligt rounded-4">
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
                    <div class="row mt-5 mb-5">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="spinner-border me-2" role="status"></div>
                            <a class="text-center fs-6 text-black text-decoration-none ms-3" href="#"
                                data-bs-toggle="modal" data-bs-target="#myModal">Buscando un repartidor para ti</a>
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