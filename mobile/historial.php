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

  <div class="container mt-4">

    <h2 class="mb-4 fw-bold">Pedidos historial</h2>
    <!--border-->
    <div class="border border-1 rounded-top-4 pt-3 ps-4 pe-4" style="background-color: lightgray;">
      <div class="row d-flex">
        <div class="col-6 text-start">
          <p class="btn btn-primary rounded-pill">ID 2423423</p>
        </div>
        <div class="col-6 text-end">
          <p>XX/XX/XXXX</p>
        </div>
      </div>
    </div>

    <div class="border border-1 rounded-bottom-4 p-4 bg-light mb-4">
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Estado</p>
          <p>Pendiente</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Nº pedido</p>
          <p>9758234</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
        </div>
        <p>Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
          <p>11:30h</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Precio</p>
          <p>7,50€</p>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-7 text-end">
          <a class="text-primary fw-bold text-decoration-none">Ver detalle <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-5 text-end">
          <a class="btn">
            <i class="bi bi-download text-primary fs-3 p-2 ps-3 pe-3 rounded-2"
              style="-webkit-text-stroke: 1px; background-color: lightgray"></i>
          </a>
        </div>
      </div>
    </div>

    <!--border-->
    <div class="border border-1 rounded-top-4 pt-3 ps-4 pe-4" style="background-color: lightgray;">
      <div class="row d-flex">
        <div class="col-6 text-start">
          <p class="btn btn-primary rounded-pill">ID 2423423</p>
        </div>
        <div class="col-6 text-end">
          <p>XX/XX/XXXX</p>
        </div>
      </div>
    </div>

    <div class="border border-1 rounded-bottom-4 p-4 bg-light mb-4">
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Estado</p>
          <p>Pendiente</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Nº pedido</p>
          <p>9758234</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
        </div>
        <p>Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
          <p>11:30h</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Precio</p>
          <p>7,50€</p>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-7 text-end">
          <a class="text-primary fw-bold text-decoration-none">Ver detalle <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-5 text-end">
          <a class="btn">
            <i class="bi bi-download text-primary fs-3 p-2 ps-3 pe-3 rounded-2"
              style="-webkit-text-stroke: 1px; background-color: lightgray"></i>
          </a>
        </div>
      </div>
    </div>
</body>

</html>