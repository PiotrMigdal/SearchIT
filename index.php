<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-darkmode-master/darktheme.css" />
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" Content="IE=edge,chrome=1" />
    <title>SearchIT</title>
</head>
<body>
    <nav class="card card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6>Environment:</h6>
                        <div class="btn-group">
                            <input class="btn btn-success" type="submit" name="UAT" value="Live"/>
                            <input class="btn btn-secondary" type="submit" name="UAT" value="UAT"/>
                        </div>
                    </div>
                    <div class="col">
                        <h6>Task Status:</h6>
                        <div class="btn-group">
                            <input class="btn btn-secondary" type="submit" name="StatusActive" value="Active Only"/>
                        </div>
                    </div>
                    <div class="col">
                        <h6>Active servers:</h6>
                        <div class="btn-group">
                            <input class="btn btn-outline-secondary" type="submit" name="SelectAll" value="All"/>
                            <input id="btn-" class="btn btn-secondary" type="submit" name="Choose_" value="HLBPWAPP01"/>
                            <input id="btn-" class="btn btn-success" type="submit" name="Choose_" value="HLBPWAPP01"/>
                            <input id="btn-" class="btn btn-secondary" type="submit" name="Choose_" value="HLBPWAPP01"/>
                            <input id="btn-" class="btn btn-success" type="submit" name="Choose_" value="HLBPWAPP01"/>
                            <input id="btn-" class="btn btn-secondary" type="submit" name="Choose_" value="HLBPWAPP01"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button id="Rebuild" class="btn btn-outline-primary" type="submit" name="Rebuild_Database"
                            value="Rebuild Database">
                        Rebuild Database
                    </button>
                    <script src="darkswitch.js"></script>
                </div>
            </div>

        <div class="input-group m-3 search-box justify-content-center">
            <input value="" type="search" id="searchbox" class="form-control col-md-3" placeholder="Search..."  aria-label="Search..." aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button id="searchit" class="btn btn-outline-primary" type="button">Search</button>
            </div>
        </div>
    </nav>
    <article>
        <div id="result" class="col-12"></div>
    </article>

    <script src="bootstrap-darkmode-master/theme.js"></script>
</body>
<!--<script src="jquery-3.3.1/jquery-3.3.1.min.js"></script>-->
<!--<script src="popper-1.14.7/popper-1.14.7.min.js"></script>-->
<!--<script src="bootstrap-4.3.1/js/bootstrap.js"></script>-->
</html>