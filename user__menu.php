<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">

    <title>Menu</title>
    <style>
        h1,
        h3 {
            color: darkblue;
            font-weight: bold;
        }

        #logo_holder {
            margin-top: 1%;
        }

        .container {
            margin-top: 7%;
        }
    </style>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
</head>

<body>

    <div class="container w-50 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-10 border border-dark">

                <?php include_once 'process.php';

                if (!isset($_SESSION["user"])) {
                    header("location: index.php");
                }

                $name = $_SESSION['user'];

                $get__id = "SELECT id FROM login__data WHERE name = '$name'";
                $do__id = mysqli_query($conn, $get__id);
                while ($row__1 = mysqli_fetch_array($do__id)) {
                    $user__id = $row__1['id'];
                ?>

                    <h1 class="text-center">
                        <?php echo $name; ?>
                    </h1>
                    <h3 class="text-center">
                        Judge&nbsp;<?php echo $user__id; ?>
                    </h3>
                <?php
                }
                ?>

                <div class="d-flex form-group align-items-center w-100 flex-column">
                    <a href="scoresheet__1.php" class="btn btn-primary mb-1 mt-4 w-75">Best in Analysis and Corrective Actions</a><br>
                    <a href="scoresheet__2.php" class="btn btn-primary mb-3 w-75">Best Quality Project</a><br>

                    <div class="btn-group dropright w-75 justify-content-center">
                        <button type="button" class="btn btn-warning dropdown-toggle mt-3 dropright" data-toggle="dropdown" aria-haspopup="true">
                            OVERALL SCORE SHEET
                        </button>

                        <div class="dropdown-menu bg-dark">
                            <a class="btn btn-dark" href="judge__overall_1.php">BEST ANALYSIS AND CORRECTIVE ACTION</a><br>
                            <a class="btn btn-dark w-100" href="judge__overall_2.php">BEST QUALITY PROJECT</a>
                            <a class="btn btn-dark w-100" href="judge__ranking.php">RANKING</a>
                        </div>
                    </div>

                    <form class="col-5">
                        <?php include 'logout.php'; ?>
                        <button class="btn btn-danger w-100 mt-5" name="logoutBtn">Logout</button><br>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row w-100">
        <div class="col-lg-4 offset-lg-4 d-flex justify-content-center" id="logo_holder">
            <img src="image/logo_1.png" width="40%" height="100%">
        </div>
    </div>


    <script src="bootstrap/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>