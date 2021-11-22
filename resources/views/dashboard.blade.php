<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Title -->
    <title>Gokart</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/switch.css" rel="stylesheet">
    <link href="assets/css/horizontal-menu/horizontal-menu.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="app horizontal-menu align-content-stretch d-flex flex-wrap">
        <div class="app-container">
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg container">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="dashboard">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gis">GPS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="settings">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content" style="margin-top: 80px;">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description d-flex align-items-center">
                                    <div class="page-description-content flex-grow-1">
                                        <h1 id="debug">&nbsp</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Rotation per Minute</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/racing.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">RPM</span>
                                                <span class="widget-stats-amount" id="rpm">...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Gokart Battery</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/battery.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Volt</span>
                                                <span class="widget-stats-amount" id="gVolt">...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Lap Count</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/finish.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Lap(s)</span>
                                                <span class="widget-stats-amount" id="lap">...</span>
                                            </div>
                                            <div>
                                                <!-- button -->
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    RESET
                                                </button>
                                                <!-- reset modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Lap Reset</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Do you want to reset the lap?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <a type="button" class="btn btn-primary" onclick="resetLap()" data-bs-dismiss="modal">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Charging Station Battery</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/lighting.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">SoC (%)</span>
                                                <span class="widget-stats-amount" id="soc">...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Solar Power</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/sun-energy.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">kWh</span>
                                                <span class="widget-stats-amount" id="solar">...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Control Disinfectant</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/spray.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Switch ON/OFF</span>
                                                <label class="switch" style="margin: auto; display: block;">
                                                    <input type="checkbox" id="swDis" value="{{$dis[0]}}" onclick="switchDis()">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-stats">
                                    <div class="card-header">
                                        <h5 class="card-title">Control Gokart</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-success">
                                                <div class="avatar m-r-sm" style="margin: auto;">
                                                    <img src="assets/images/go-kart.png" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Switch ON/OFF</span>
                                                <label class="switch" style="margin: auto; display: block;">
                                                    <input type="checkbox" id="swGo" value="{{$go[0]}}" onclick="switchGo()">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/update.js"></script>
    <script>
        var disVal = document.getElementById('swDis').getAttribute('value');
        var goVal = document.getElementById('swGo').getAttribute('value');
        if(disVal == 1){
            document.getElementById('swDis').checked = true;
        }
        if(goVal == 1){
            document.getElementById('swGo').checked = true;
        }
        if(disVal == 0){
            document.getElementById('swDis').checked = false;
        }
        if(goVal == 0){
            document.getElementById('swGo').checked = false;
        }
    </script>
    <script>
        $.ajax({
            url: 'api/getGokartData',
            success: function (data) {
                //
                document.getElementById('rpm').innerHTML = data[0].rpm;
                document.getElementById('gVolt').innerHTML = data[0].voltage;
            }
        });
        $.ajax({
            url: 'api/ChargeData',
            success: function (data) {
                //
                document.getElementById('soc').innerHTML = data.soc;
                document.getElementById('solar').innerHTML = data.data[0].solar;
            }
        });
        $.ajax({
            url: 'api/countLap',
            success: function (data) {
                //
                document.getElementById('lap').innerHTML = data;
            }
        });
    </script>
    <script>
        function resetLap(){
            $.ajax({
                url: 'api/reset',
                type: 'POST',
                success: function(){
                    location.reload();
                }
            });
        }
        function switchDis(){
            //
            var statSwDis;
            var x = document.getElementById('swDis').checked;
            if(x == true) statSwDis = 1;
            else statSwDis = 0;
            $.ajax({
                url: 'api/postDis',
                type: 'POST',
                data: {
                    statDis: statSwDis
                },
            });
        }
        function switchGo(){
            //
            var statSwGo;
            var x = document.getElementById('swGo').checked;
            if(x == true) statSwGo = 1;
            else statSwGo = 0;
            $.ajax({
                url: 'api/Status',
                type: 'POST',
                data: {
                    id: 1,
                    status: statSwGo
                },
            });
        }
    </script>
</body>

</html>
