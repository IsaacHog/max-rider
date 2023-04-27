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
  <?php include("mi_cuenta_navbar.php"); ?>
  
  <div class="container mt-4">

    <h2 class="mb-4 fw-bold">Mis contactos</h2>
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
          <p class="fw-bold me-3">Nombre</p>
          <p>Juan García</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Empresa</p>
          <p>Empresa Ejemplo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Email</p>
          <p>ejemplo@ejemplo.com</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Teléfono</p>
          <p>+34 666 666 666</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
          <p>Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a class="text-primary fw-bold text-decoration-none fs-1"><i class="bi bi-arrow-right"></i></a>
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
          <p class="fw-bold me-3">Nombre</p>
          <p>Juan García</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Empresa</p>
          <p>Empresa Ejemplo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Email</p>
          <p>ejemplo@ejemplo.com</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Teléfono</p>
          <p>+34 666 666 666</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
          <p>Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a class="text-primary fw-bold text-decoration-none fs-1"><i class="bi bi-arrow-right"></i></a>
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
          <p class="fw-bold me-3">Nombre</p>
          <p>Juan García</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Empresa</p>
          <p>Empresa Ejemplo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Email</p>
          <p>ejemplo@ejemplo.com</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Teléfono</p>
          <p>+34 666 666 666</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex">
          <p class="fw-bold me-3">Dirección</p>
          <p>Carrer de Josep Campreciós, 36, 08028, Barcelona</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a class="text-primary fw-bold text-decoration-none fs-1"><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-12 d-flex align-items-center justify-content-center mb-4 mt-3">
      <a class="btn btn-primary rounded-pill" href="">&nbsp Añadir &nbsp</a>
    </div>

  </div>
</body>

</html>