<?php
    include 'includes/autoloader.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" Content="IE=edge,chrome=1" />
    <title>SearchIT</title>

    <link rel="stylesheet" href="css/app.css">

    <script src="node_modules/jquery/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
<main>
    <nav class="m-1">
        <div class="container">
            <div class="row justify-content-end">
                <button id="SettingsButton" class="btn btn-sm btn-outline-primary" type="button" data-toggle="collapse" data-target="#SettingsContent" aria-expanded="false" aria-controls="collapseExample">
                    Settings
                </button>
                <div class="collapse position-absolute mt-5" id="SettingsContent">
                    <div class="card card-body">
                        <form action="rebuild.php" method="post">
                            <button id="rebuild" class="btn btn-sm btn-outline-primary" type="submit" name="Rebuild_Database" value="Rebuild Database">
                                Rebuild Database
                                <div class="loader-box">
                                    <div class="loader">
                                    </div>
                                </div>
                            </button>
                        </form>
                        <div class="alert alert-success mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="p-2">
                    <h6>Environment</h6>
                    <div class="btn-group mt-1">
                        <input class="btn btn-sm btn-success" type="submit" name="UAT" value="Live"/>
                        <input class="btn btn-sm btn-secondary" type="submit" name="UAT" value="UAT"/>
                    </div>
                </div>
                <div class="p-2">
                    <h6>Task Status</h6>
                    <input class="btn btn-sm btn-secondary mt-1" type="submit" name="StatusActive" value="Active only"/>
                </div>
                <div class="p-2">
                    <h6>Active servers</h6>
                    <div class="btn-group mt-1">
                        <input id="btn-1" class="btn btn-sm btn-secondary" type="submit" name="Choose_" value="HLBPWAPP01"/>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="3 weeks ago">
                            <span class="info">i</span>
                        </button>
                    </div>
                    <div class="btn-group mt-1">
                        <input id="btn-1" class="btn btn-sm btn-success" type="submit" name="Choose_" value="HLBPWAPP01"/>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="popover" title="Last updated" data-content="3 weeks ago">
                            <span class="info">i</span>
                        </button>
                    </div>
                    <div class="btn-group mt-1">
                        <input id="btn-1" class="btn btn-sm btn-success" type="submit" name="Choose_" value="HLBPWAPP01"/>
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="popover" title="Last updated" data-content="3 weeks ago">
                            <span class="info">i</span>
                        </button>
                    </div>
                    <div class="btn-group mt-1">
                        <input id="btn-1" class="btn btn-sm btn-secondary" type="submit" name="Choose_" value="HLBPWAPP01"/>
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="popover" title="Last updated" data-content="3 weeks ago">
                            <span class="info">i</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="input-group m-3 search-box justify-content-center">
            <input value="" type="search" id="searchbox" class="form-control col-md-3" placeholder="Search..."
                   aria-label="Search..." aria-describedby="basic-addon2"/>
            <div class="input-group-append">
                <button id="searchit" class="btn btn-sm btn-outline-primary" type="button">Search</button>
            </div>
        </div>
    </nav>
    <article>
        <div id="result" class="col-12"></div>
    </article>
</main>
</body>
</html>