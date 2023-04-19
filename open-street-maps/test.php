<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenStreetMaps Test</title>
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
                    <a class="nav-link text-black" href="#">Open Street Maps Test</a>
                </li>
            </ul>
            <a class="nav-link-person btn btn-light rounded-5 py-2 px-4 ml-auto" href="login.php">
                <i class="bi bi-person-circle text-primary fs-4"></i>
            </a>

        </div>
    </nav>

    <div class="container mt-5">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="query" name="query"
                        placeholder="Location">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <?php
    if (isset($_GET['query'])) {
        $query = urlencode($_GET['query']);
        $url = "https://nominatim.openstreetmap.org/search?q=$query&format=jsonv2&addressdetails=1";

        ini_set('user_agent', 'My Application');

        $data = file_get_contents($url);
        $results = json_decode($data, true);

        foreach ($results as $result) {
            echo $result['display_name'] . '<br>';
        }
    }
    ?>


</body>

</html>