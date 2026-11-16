<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <?php include_once 'process.php';

    if (!isset($_SESSION["user"])) {
        header("location: index.php");
    }

    $name = $_SESSION['user'];


    $get__id = "SELECT * FROM login__data WHERE name = '$name'";
    $do__id = mysqli_query($conn, $get__id);
    while ($row__1 = mysqli_fetch_array($do__id)) {
        $user__id = $row__1['category'];
    ?>

        <!-- Default dropright button -->

        <div class="container w-50 justify-content-center">
            <div class="row justify-content-center">
                <div class="col-lg-10 border border-dark">
                    <h1 class="text-center"><?php echo $name; ?></h1>
                    <h3 class="text-center"><?php echo $user__id; ?></h3>

                <?php
            }
                ?>
                <div class="btn-group dropright w-50 offset-lg-3 justify-content-center">
                    <button type="button" class="btn btn-warning dropdown-toggle mt-3 w-50 dropright" data-toggle="dropdown" aria-haspopup="true">
                        OVERALL SCORE SHEET
                    </button>

                    <div class="dropdown-menu bg-dark w-100  text-center">
                        <form action="overall__scoresheet.php">
                            <button class="btn btn-dark" name="baca_button">BEST ANALYSIS AND CORRECTIVE ACTION</button><br>
                        </form>
                        <form action="overall__scoresheet_1.php">
                            <button class="btn btn-dark w-100">BEST QUALITY PROJECT</button>
                        </form>
                        <!-- <a class="btn btn-dark w-100" href="ranking.php">RANKING</a> -->
                    </div>
                </div>

                <div class="btn-group dropright w-50 offset-lg-3 justify-content-center">
                    <button type="button" class="btn btn-primary dropdown-toggle mt-3 w-50 dropright" data-toggle="dropdown" aria-haspopup="true">
                        Ranking
                    </button>


                    <div class="dropdown-menu bg-dark w-100 text-center">
                        <a class="btn btn-dark" href="ranking.php">BEST ANALYSIS AND CORRECTIVE ACTION</a><br>
                        <a class="btn btn-dark w-100" href="ranking_1.php">BEST QUALITY PROJECT</a>
                        <!-- <a class="btn btn-dark w-100" href="ranking.php">RANKING</a> -->
                    </div>
                </div>

                <div class="d-flex form-group align-items-center w-100 flex-column">
                    <div class="w-50">
                        <a href="dept__arangement.php" class="btn btn-primary mb-2 mt-2 w-100">Department Arrangement</a>
                    </div>

                    <div class="w-25 mt-5">
                        <a href="index.php" class="btn btn-danger mb-2 w-100">Logout</a>
                    </div>

                </div>
                </div>
            </div>

        </div>
        </div>
        </div>

        </div>
        <div class="row w-100">
            <div class="col-lg-4 offset-lg-4 d-flex justify-content-center" id="logo_holder">
                <img src="image/logo_1.png" width="40%" height="100%">
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->
        <script src="bootstrap/jquery-3.2.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>