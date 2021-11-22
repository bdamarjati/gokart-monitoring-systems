<!doctype html>
<html lang="en">

<head>
    <title>Landing - DEV</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/landing-dev.css" rel="stylesheet">
</head>

<body>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">

            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">DEV PAGE</h1>
                <p class="fs-5 text-muted">This is a web page for early development.</p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Charging Station</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                GET / POST
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>JSON :</li>
                                <li>"battery" : {value},</li>
                                <li>"solar" : {value}</li>
                                <li>API Link</li>
                                <a style="font-size:14px;">https://enerma.id/gokart/api/ChargeData</a>
                            </ul>
                            <a href="api/ChargeData" class="w-100 btn btn-lg btn-primary" role="button">Check GET API</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Gokart Status</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                GET / POST
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>JSON :</li>
                                <li>"id" : {value}</li>
                                <li>"status" : {'ON'/'OFF'/'CHARGING'}</li>
                                <li>API Link</li>
                                <a style="font-size:14px;">https://enerma.id/gokart/api/Status</a>
                            </ul>
                            <a href="api/Status" class="w-100 btn btn-lg btn-primary" role="button">Check GET API</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Gokart Battery</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                GET / POST
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>JSON :</li>
                                <li>"id_gokart" : {value}</li>
                                <li>"power" : {value}</li>
                                <li>API Link</li>
                                <a style="font-size:14px;">https://enerma.id/gokart/api/BatData</a>
                            </ul>
                            <a href="api/BatData" class="w-100 btn btn-lg btn-primary" role="button">Check GET API</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">GPS</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                GET / POST
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>JSON :</li>
                                <li>"id_gokart" : {value}</li>
                                <li>"latitude" : {value}</li>
                                <li>"longitude" : {value}</li>
                                <li>"satelite" : {value}</li>
                                <li>"speed" : {value}</li>
                                <li>"direction" : {value}</li>
                                <li>API Link</li>
                                <a style="font-size:14px;">https://enerma.id/gokart/api/GpsData</a>
                            </ul>
                            <a href="api/GpsData" class="w-100 btn btn-lg btn-primary" role="button">Check GET API</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </main>

    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
