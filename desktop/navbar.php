<nav class="navbar navbar-expand-sm bg-white navbar-light p-3">
  <a class="navbar-brand d-flex align-items-center" href="index.php">
    <span class="text-primary fs-2" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
    <span class="text-primary fs-2" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
      <a class="nav-link text-black <?php if(basename($_SERVER['PHP_SELF'])=='solicitar_pedido.php') echo 'border-bottom border-primary border-2'; ?>" href="solicitar_pedido.php">Solicitar pedido</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black <?php if(basename($_SERVER['PHP_SELF'])=='activos.php') echo 'border-bottom border-primary border-2'; ?>" href="activos.php">Activos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black <?php if(basename($_SERVER['PHP_SELF'])=='historial.php') echo 'border-bottom border-primary border-2'; ?>" href="historial.php">Historial</a>
      </li>
    </ul>
    <a class="nav-link-person btn btn-light rounded-5 py-2 px-4 ml-auto" href="mi_cuenta.php">
      <i class="bi bi-person-circle text-primary fs-4"></i>
    </a>

  </div>
</nav>
