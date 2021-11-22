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
                                    <a class="nav-link" href="dashboard">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gis">GPS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="settings">Settings</a>
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
                                <div class="page-description page-description-tabbed">
                                    <h1>Settings</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <h3>State of Charge</h3>
                                                    <div class="col-md-6">
                                                        <label for="settingsVmax" class="form-label">Max. Voltage</label>
                                                        <input type="text" class="form-control" id="settingsMaxVolt" placeholder="Maximum Battery Voltage" value="{{$data[0]['vmax']}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsVmin" class="form-label">Min. Voltage</label>
                                                        <input type="text" class="form-control" id="settingsMinVolt" placeholder="Minimum Battery Voltage" value="{{$data[0]['vmin']}}">
                                                    </div>
                                                </div>
                                                <div class="row m-t-lg">
                                                    <h3>Start/Finish Location</h3>
                                                    <a href="https://youtube.com">Link Tutorial</a>
                                                    <div class="col-md-6">
                                                        <label for="settingsLongA" class="form-label">Longitude A</label>
                                                        <input type="text" class="form-control" id="settingsLongA" placeholder="longitude titik 1" value="{{$data[0]['longA']}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsLatA" class="form-label">Latitude A</label>
                                                        <input type="text" class="form-control" id="settingsLatA" placeholder="latitude titik 1" value="{{$data[0]['latA']}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsLongB" class="form-label">Longitude B</label>
                                                        <input type="text" class="form-control" id="settingsLongB" placeholder="longitude titik 2" value="{{$data[0]['longB']}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsLatB" class="form-label">Latitude B</label>
                                                        <input type="text" class="form-control" id="settingsLatB" placeholder="latitude titik 2" value="{{$data[0]['latB']}}">
                                                    </div>
                                                </div>
                                                <div class="row m-t-lg">
                                                    <div class="col">
                                                        <a href="#" class="btn btn-primary m-t-sm">Update</a>
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
        </div>
    </div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/highlight/highlight.pack.js"></script>
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/pages/settings.js"></script>
</body>

</html>