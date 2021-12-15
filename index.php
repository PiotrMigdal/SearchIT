<?php
    include "includes/autoloader.inc.php";
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
</head>
<body>
<main class="container">
    <nav class="mt-1">
        <!--    Start navigation form    -->
        <form action="index.php" method="get">
            <div>
                <div class="row justify-content-end">
                    <button id="SettingsButton" class="btn btn-sm btn-outline-primary" type="button" data-toggle="collapse" data-target="#SettingsContent" aria-expanded="false" aria-controls="collapseExample">
                        Settings
                    </button>
                    <div class="collapse position-absolute mt-5" id="SettingsContent">
                        <div class="card card-body">
<!--                            <form action="rebuild.php" method="post">-->
<!--                                <button id="rebuild" class="btn btn-sm btn-outline-primary" type="submit" name="Rebuild_Database" value="Rebuild Database">-->
<!--                                    Rebuild Database-->
<!--                                    <div class="loader-box">-->
<!--                                        <div class="loader">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </button>-->
<!--                            </form>-->
                            <div class="alert alert-success mt-3"></div>
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="p-2">
                        <h6>Task Status</h6>
                        <div class="btn-group m-1">
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-checkbox active">
                                    <input type="checkbox" checked autocomplete="off" name="status"> Active only
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <h6>Environment</h6>
                        <?php include "includes/environment-index.inc.php"; ?>
                    </div>
                    <div class="p-2 live-servers">
                        <h6>Servers</h6>
                        <?php include "includes/server-index.inc.php"; ?>
                    </div>
                </div>
            </div>

            <div class="input-group m-3 search-box justify-content-center">
                <input value="<?php echo $_GET["search"] ?? "" ?>" type="text" name="search" class="form-control col-md-3" placeholder="Search..."
                       aria-label="Search..." aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-sm btn-primary">
                </div>
            </div>
        <!--    End navigation form    -->
        </form>
    </nav>
    <article>
        <div id="result" class="col-12">
            <?php include "includes/task-index.inc.php"; ?>
        </div>
    </article>
</main>
</body>
<script src="js/app.js"></script>
</html>