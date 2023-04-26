<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaxRider - Login</title>
  <?php include "links_header.php"; ?>
</head>

<body class="overflow-hidden">
  <a class="d-flex align-items-center text-decoration-none pt-3 ps-2" href="../index.php">
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
  </a>

  <div class="d-flex align-items-center" style="height: 75vh">
    <div class="container-fluid pt-3 d-flex flex-column align-items-center">
      <div class="row">
        <h5 class="fw-bold fs-2">Iniciar sesión en MaxRider</h5>
      </div>

      <div class="form-group pb-3">
        <input type="email" class="form-control rounded-pill form-control-lg" id="email" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-pill form-control-lg" id="password" placeholder="Contraseña">
      </div>
      <div class="row">
        <p class="form-text text-muted"><a href="#" class="text-decoration-none fs-6">¿Has olvidado tu contraseña?</a>
        </p>
      </div>

      <div class="row">
        <button class="btn btn-primary mb-3 p-3 rounded-4 ps-4 pe-4">Iniciar sesión</button>
      </div>

      <p class="form-text text-black fs-6">
        ¿Ya estás registrado?<a href="#" class="text-decoration-none fs-6">
        Iniciar sesión</a></small>
    </div>

  </div>
</body>


</html>