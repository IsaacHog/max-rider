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
        <div class="border border-1 border-secondary-subtle rounded-4 mt-5">
            <!--Border content -->
            <div class="row ms-3 mt-4">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1"></label>
                    </div>
                </div>
                <div class="col">
                  <!-- content of the second column in first row -->
                  <p class="fw-bold">Fecha</p>
                </div>
                <div class="col">
                  <!-- content of the third column in first row -->
                  <p class="fw-bold">Estado</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="fw-bold">ID envío</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="fw-bold">Nº pedido</p>
                </div>
                <div class="col-4">
                  <!-- content of the fourth column in first row -->
                  <p class="fw-bold">Dirección</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
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
                  <!-- content of the second column in first row -->
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <!-- content of the third column in first row -->
                  <p class="">Pendiente</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">9758234</p>
                </div>
                <div class="col-4">
                  <!-- content of the fourth column in first row -->
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col text-end">
                  <!-- content of the fourth column in first row -->
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
            <hr>
            <div class="row ms-3">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3"></label>
                    </div>
                </div>
                <div class="col">
                  <!-- content of the second column in first row -->
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <!-- content of the third column in first row -->
                  <p class="">Programado</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">9758234</p>
                </div>
                <div class="col-4">
                  <!-- content of the fourth column in first row -->
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col text-end">
                  <!-- content of the fourth column in first row -->
                  <div class="rounded-3 ml-auto bg-primary d-flex justify-content-center align-items-center"
                        style="width: 33px; height: 32px;">
                        <i class="bi bi-arrow-right fs-3 text-primary text-align-end me-3"></i>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row ms-3">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                        <label class="form-check-label" for="inlineCheckbox4"></label>
                    </div>
                </div>
                <div class="col">
                  <!-- content of the second column in first row -->
                  <p class="">XX/XX/XXXX</p>
                </div>
                <div class="col">
                  <!-- content of the third column in first row -->
                  <p class="">Activo</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">2423423</p>
                </div>
                <div class="col">
                  <!-- content of the fourth column in first row -->
                  <p class="">9758234</p>
                </div>
                <div class="col-4">
                  <!-- content of the fourth column in first row -->
                  <p class="">Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
                </div>
                <div class="col text-end">
                  <!-- content of the fourth column in first row -->
                  <i class="bi bi-arrow-right fs-3 text-primary me-3"></i>
                </div>
            </div>
        </div>
    </div>

</body>

</html>