<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxRider</title>
    <?php include "../links_header.php"; ?>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-sm bg-white navbar-light p-3">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="text-primary fs-2" style="font-family: 'Visby CF', sans-serif; font-weight: normal;">Max</span>
            <span class="text-primary fs-2" style="font-family: 'Visby CF', sans-serif; font-weight: bold;">Rider</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-black <?php if (basename($_SERVER['PHP_SELF']) == 'solicitar_pedido.php')
                        echo 'border-bottom border-primary border-2'; ?>"
                        href="solicitar_pedido.php">Open Street Maps Test</a>
                </li>
            </ul>
            <a class="nav-link-person btn btn-light rounded-5 py-2 px-4 ml-auto" href="login.php">
                <i class="bi bi-person-circle text-primary fs-4"></i>
            </a>

        </div>
    </nav>

    $latitude = 51.5074;
    $longitude = -0.1278;

    $url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=$latitude&lon=$longitude";
    print_r($url);
    $data = file_get_contents($url);
    $result = json_decode($data, true);

    print_r($result);

    ?>


</body>

</html>