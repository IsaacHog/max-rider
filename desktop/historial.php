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

    <div class="container">
        <div class="border border-1 border-secondary-subtle rounded-4 mt-5 mb-5">
            <!--Border content -->
            <div class="row ms-3 mt-4">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="fw-bold">Fecha</p>
                </div>
                <div class="col">
                  <p class="fw-bold">Estado</p>
                </div>
                <div class="col">
                  <p class="fw-bold">ID envío</p>
                </div>
                <div class="col">
                  <p class="fw-bold">Nº pedido</p>
                </div>
                <div class="col">
                  <p class="fw-bold">Entrega</p>
                </div>
                <div class="col-3">
                  <p class="fw-bold">Dirección</p>
                </div>
                <div class="col">
                  <p class="fw-bold">Albarán</p>
                </div>
                <div class="col">
                  <p class="fw-bold">Precio</p>
                </div>
                <div class="col">

                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6; backgroundcolor:grey">
                        <i class="bi bi-download text-primary" style="backgroundcolor:grey"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 ">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                </div>
                <div class="col">
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <p class="">Entregado</p>
                </div>
                <div class="col">
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <p class="">9758234</p>
                </div>
                <div class="col">
                  <p class="">11:30h</p>
                </div>
                <div class="col-3">
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col">
                    <div class="rounded-3 ml-auto  d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px; background-color: #F3F2F6;">
                        <i class="bi bi-download text-primary"></i>
                    </div>
                </div>
                <div class="col">
                  <p class="">7,50€</p>
                </div>
                <div class="col text-end">
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3 mb-3">
                <div class="col-9">

                </div>
                <div class="col-3">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Anterior</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">1</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">2</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">3</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Siguiente</button>
                  </div>
                </div>
            </div>
            

        </div>
    </div>

</body>

</html>