<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaxRider - Login</title>
  <?php include "links_header.php"; ?>
</head>

<body class="overflow-hidden">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-6 d-flex align-items-center justify-content-center position-relative">
        <div class="logo-container position-absolute top-0 start-0 pt-3 ps-2">
          <a class="d-flex align-items-center text-decoration-none" href="index.php">
            <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
            <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
          </a>
        </div>

        <div class="container-fluid pt-3 d-flex flex-column align-items-center">

          <div class="row pb-4 col-6 col-xxl-8 col-xl-9 col-lg-10 col-md-11">
            <h5 class="fw-bold fs-2">Regístrate en MaxRider</h5>
            <p class="fs-5">Regístrate en MaxRider</p>
          </div>

          <!-- input forms -->
          <div class="form-group d-grid gap-2 col-6 col-xxl-8 col-xl-9 col-lg-10 col-md-11">
            <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Nombre">
            <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Empresa o particular">
            <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Nombre de la empresa">
            <div class="row">
              <div class="col-6 pe-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Sector">
              </div>
              <div class="col-6 ps-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Envíos mensuales">
              </div>
            </div>
            <div class="row">
              <div class="col-6 pe-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Teléfono">
              </div>
              <div class="col-6 ps-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Ciudad">
              </div>
            </div>
            <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Email">
            <div class="row">
              <div class="col-6 pe-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Contraseña">
              </div>
              <div class="col-6 ps-1">
                <input class="form-control fs-6 rounded-4 form-control-lg" placeholder="Repetir contraseña">
              </div>
            </div>

          </div>

          <div class="row col-6 col-xxl-8 col-xl-9 col-lg-10 col-md-11 pt-4">
            <div class="col-7 ps-0">
              <p class="text-muted" style="font-size: 12px">
                Al registrarte aceptas los <span class="text-decoration-underline">Términos y Condiciones</span> y la
                <span class="text-decoration-underline">Politica de privacidad</span> de Stuart.
              </p>
            </div>
            <div class="col-5 pe-0">
              <button class="btn btn-primary w-100 rounded-4 fs-6" style="height: 42px">Crear cuenta</button>
            </div>
          </div>

          <div class="row col-6 col-xxl-8 col-xl-9 col-lg-10 col-md-11">
            <p class="form-text text-black fs-6 ps-0">
              ¿Ya estás registrado?<a href="login.php" class="text-decoration-none fs-6">
                Iniciar sesión</a></small>
            </p>
          </div>

        </div>
      </div>

      <div class="col-md-6" style="  height: 100vh; background-image: url('../assets/login-image.png'); background-size: contain; background-repeat: no-repeat;
        background-color: #0047FF; background-position: center;"></div>
    </div>
  </div>
</body>

</html>