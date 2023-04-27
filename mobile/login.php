<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaxRider - Login</title>
  <?php include "links_header.php"; ?>
</head>

<body class="overflow-hidden">
  <a class="d-flex align-items-center text-decoration-none pt-3 ps-3" href="../index.php">
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
    <span class="text-primary fs-1" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
  </a>

  <div class="d-flex align-items-center" style="height: 75vh">
    <div class="container-fluid pt-3 d-flex flex-column align-items-center">
      <div class="row">
        <h5 class="fw-bold fs-2 text-center">Iniciar sesión en MaxRider</h5>
      </div>

      <div class="col-12 pb-3 pt-4">
        <input type="email" class="form-control rounded-4 form-control-lg fs-6" id="email" placeholder="Email">
      </div>
      <div class="col-12">
        <input type="password" class="form-control rounded-4 form-control-lg fs-6" id="password" placeholder="Contraseña">
      </div>
      <div class="row col-12 pt-2">
        <p class="form-text text-muted text-center"><a href="#" class="text-decoration-none fs-6">¿Has olvidado tu contraseña?</a>
        </p>
      </div>

      <div class="row pt-2">
        <button class="btn btn-primary mb-3 p-2 rounded-4 ps-4 pe-4">Iniciar sesión</button>
      </div>

      <p class="form-text text-black fs-6">
        ¿Ya estás registrado?<a href="register.php" class="text-decoration-none fs-6">
        Iniciar sesión</a></small>
    </div>

  </div>
</body>


</html>