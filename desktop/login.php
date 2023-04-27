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
          <a class="d-flex align-items-center text-decoration-none" href="../index.php">
            <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
            <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
          </a>
        </div>

        <div class="container-fluid pt-3 d-flex flex-column align-items-center">
          <div class="row">
            <h5 class="fw-bold fs-2">Iniciar sesión en MaxRider</h5>
          </div>

          <div class="form-group pb-3 w-75">
            <input type="email" class="form-control rounded-pill form-control-lg" id="email" placeholder="Email">
          </div>
          <div class="form-group w-75">
            <input type="password" class="form-control rounded-pill form-control-lg" id="password"
              placeholder="Contraseña">
          </div>
          <div class="row w-75 pt-2">
            <p class="form-text text-end"><a href="#" class="text-decoration-none fs-6">¿Olvidaste tu contraseña?</a>
            </p>
          </div>

          <div class="row w-75">
            <button class="btn btn-primary mb-3 p-2 rounded-4 ps-5 pe-5 fs-5">Iniciar sesión</button>
          </div>

          <p class="form-text text-black fs-6">
            ¿Aún no tienes cuenta?<a href="#" class="text-decoration-none fs-6">
              Regístrate</a></small>
          </p>
        </div>
      </div>

      <div class="col-md-6" style="  height: 100vh; background-image: url('../assets/login-image.png'); background-size: contain; background-repeat: no-repeat;
        background-color: #0047FF; background-position: center;"></div>
    </div>
  </div>
</body>

</html>