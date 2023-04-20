<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenStreetMaps Test</title>
    <?php include "../links_header.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script type="text/javascript" src="https://rawgit.com/jieter/Leaflet.encoded/master/Polyline.encoded.js"></script>
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
        <div class="row mb-3">
            <form action="" method="get" id="search-form" class="ps-0 pe-0">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control search-input" id="query-start" name="query-start"
                            placeholder="Start location">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control search-input" id="query-end" name="query-end"
                            placeholder="End location">
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div id="search-results" class="col-12 d-flex justify-content-center"></div>
        </div>

        <div class="row mb-3">
            <div id="mapid" style="height: 500px; width: 100%" class="col-12"></div>
        </div>

        <div class="row mb-3">
            <div class="card col-12">
                <div class="row">
                    <div class="d-flex flex-wrap">
                        <span class="p-0 d-inline-block" id="route-type-car">Distance by car</span>
                        <span class="p-0 d-inline-block ms-0" id="route-distance-car">
                            : Distance will be displayed here.
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex flex-wrap">
                        <span class="p-0 d-inline-block" id="route-type-car">Duration by car</span>
                        <span class="p-0 d-inline-block ms-0" id="route-duration-car">
                            : Duration will be displayed here.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="create-map.js"></script>
    <script type="module" src="search.js"></script>
</body>

</html>