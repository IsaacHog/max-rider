<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaxRider - Login</title>
  <?php include "links_header.php"; ?>
</head>

<body>
  <a class="d-flex align-items-center text-decoration-none pt-3 ps-3" href="../index.php">
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
  </a>

  <div class="container-fluid d-flex flex-column ps-3 pt-5">
    <div class="d-flex align-items-center">
      <div class="row ">
        <h5 class="fw-bold fs-2">Regístrate en MaxRider</h5>
        <p class="fs-6">Regístrate sin compromiso es muy fácil</p>
      </div>
    </div>

    <!-- input forms -->
    <div class="form-group d-grid gap-2 w-100 pt-3">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Nombre">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Empresa o particular">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Nombre de la empresa">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Sector">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Envíos mensuales">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Teléfono">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Ciudad">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Email">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Contraseña">
      <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Repetir contraseña">
    </div>

    <div class="row pt-4 d-flex align-content-center justify-content-center">
      <p class="text-center" style="font-size: 12px">
        Al registrarte aceptas los <span class="text-decoration-underline">Términos y Condiciones</span> y la <span class="text-decoration-underline">Politica de privacidad</span> de Stuart.
      </p>
      <button class="btn btn-primary rounded-pill fs-6 w-auto ps-4 pe-4" style="height: 52px">Crear cuenta</button>
    </div>

    <div class="row pt-3">
      <p class="form-text text-black fs-6 ps-0 text-center">
        ¿Ya estás registrado?<a href="login.php" class="text-decoration-none fs-6">
          Iniciar sesión</a></small>
      </p>
    </div>
  </div>
</body>


</html>