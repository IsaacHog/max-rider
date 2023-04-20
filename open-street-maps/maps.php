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

</html>