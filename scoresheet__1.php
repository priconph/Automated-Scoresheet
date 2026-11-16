<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">
    <link rel="stylesheet" href="toastr/toastr.min.css">

    <title>Score Sheet - Best Analysis and Corrective Action</title>
    <style>
        h1 {
            color: gray;
            font-weight: bold;
            justify-content: start;

        }

        input {
            text-align: center;

        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #logo_holder {
            margin-top: 1%;
        }

        .container {
            margin-top: 7%;
        }

        td,
        th {
            font-size: 18px;
        }

        label {
            font-size: 18px;
        }
    </style>
    <script type="text/javascript">
        window.onbeforeunload = function() {
            return "Are you sure?"
        }
    </script>

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

    <?php
    include_once 'process.php';
    // user session
    $name = $_SESSION['user'];
    // end user session
    // get judge id
    $get__id = "SELECT id FROM login__data WHERE name = '$name'";
    $do__id = mysqli_query($conn, $get__id);
    while ($row__1 = mysqli_fetch_array($do__id)) {
        $user__id = $row__1['id'];
        $_SESSION['uid'] = $user__id;
        // end get judge id
    ?>
        <!-- pass to db -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>">
            <div class="container w-100 col-lg-11">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 mt-3 text-center border border-dark">
                        <div class="d-flex flex-row">
                            <div class="col-lg-8 mt-4">
                                <h1 class="d-flex">Judge&nbsp;<?php echo $user__id; ?> - <input style="text-align: left; border:0; font-weight:bold; color:darkblue;" name="judge" value="<?php echo $name; ?>" style="border: 0; color: darkblue; background-color: white;" readonly></h1><br>

                            <?php
                        }
                            ?>
                            </div>

                            <div class="col mb-1 mt-4">
                                <ul class="list-inline" id="buttons__">
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn btn-light btn-outline-success" id="save__button" name="save__button" onclick="window.onbeforeunload = null;">
                                            Save Rating
                                        </button>
                                    </li>
                                    <!-- <li class="list-inline-item">
                    <button type="submit" class="btn btn-light btn-outline-danger" id="save__button" name="reset__button1">
                        Reset
                    </button>
                </li> -->
                                    <li class="list-inline-item">
                                        <a href="user__menu.php" class="btn btn-light btn-outline-secondary" id="menu__button">
                                            Back to Menu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-max text-center">
                            <h4 style="background-color: orange; font-size:30px;">
                                BEST ANALYSIS AND CORRECTIVE ACTION
                            </h4>
                        </div>

                        <div class="col">
                            <table class="table table-hover table-sm table-responsive w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-size: small;" class="text-left">DEPARTMENT/SECTION</th>
                                        <th scope="col"></th>
                                        <th>
                                            <?php
                                            $get__department = "SELECT * FROM arrangement WHERE id = '1'";
                                            $do__get = mysqli_query($conn, $get__department);
                                            while ($dept = mysqli_fetch_array($do__get)) {
                                            ?>
                                                <input class="w-50 text-center" name="first_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department']; ?>" readonly>
                                            <?php
                                            }
                                            ?>
                                        </th>

                                        <th>
                                            <?php
                                            $get__department = "SELECT * FROM arrangement WHERE id = '2'";
                                            $do__get = mysqli_query($conn, $get__department);
                                            while ($dept = mysqli_fetch_array($do__get)) {
                                            ?>
                                                <input class="w-50 text-center" name="second_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department']; ?>" readonly>
                                            <?php
                                            }
                                            ?>

                                        </th>
                                        <th>
                                            <?php
                                            $get__department = "SELECT * FROM arrangement WHERE id = '3'";
                                            $do__get = mysqli_query($conn, $get__department);
                                            while ($dept = mysqli_fetch_array($do__get)) {
                                            ?>
                                                <input class="w-50 text-center" name="third_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department']; ?>" readonly>
                                            <?php
                                            }
                                            ?>
                                        </th>
                                        <th>
                                            <?php
                                            $get__department = "SELECT * FROM arrangement WHERE id = '4'";
                                            $do__get = mysqli_query($conn, $get__department);
                                            while ($dept = mysqli_fetch_array($do__get)) {
                                            ?>
                                                <input class="w-50 text-center" name="fourth_dept_name" type="text" style="border:0; font-weight:bold;" value="<?php echo $dept['department']; ?>" readonly>
                                            <?php
                                            }
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" style="font-size: small;" class="text-center">Criteria</th>
                                        <th scope="row" style="font-size: small;">Weight</th>
                                        <td>
                                            POINT
                                        </td>
                                        <td>
                                            POINT
                                        </td>
                                        <td>
                                            POINT
                                        </td>
                                        <td>
                                            POINT
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center w-25">A. Level of Analysis (Yield, LAR and Customer Complaint)</th>
                                        <td>
                                            45%
                                        </td>
                                        <?php
                                        $uid = $_SESSION['uid'];
                                        // first dept
                                        $get__department = "SELECT * FROM arrangement WHERE id = '1'";
                                        $do__get = mysqli_query($conn, $get__department);
                                        $departments = mysqli_fetch_array($do__get);
                                        $departments__1 = $departments['department'];
                                        // end first dept
                                        // second dept
                                        $get__department_1 = "SELECT * FROM arrangement WHERE id = '2'";
                                        $do__get_1 = mysqli_query($conn, $get__department_1);
                                        $departments_1 = mysqli_fetch_array($do__get_1);
                                        $departments__2 = $departments_1['department'];
                                        // end second dept
                                        // third dept
                                        $get__department_2 = "SELECT * FROM arrangement WHERE id = '3'";
                                        $do__get_2 = mysqli_query($conn, $get__department_2);
                                        $departments_2 = mysqli_fetch_array($do__get_2);
                                        $departments__3 = $departments_2['department'];
                                        // end third dept
                                        // fourth dept
                                        $get__department_3 = "SELECT * FROM arrangement WHERE id = '4'";
                                        $do__get_3 = mysqli_query($conn, $get__department_3);
                                        $departments_3 = mysqli_fetch_array($do__get_3);
                                        $departments__4 = $departments_3['department'];
                                        // end fourth dept
                                        // Judge number 1
                                        if ($uid == '1') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores WHERE 
                    Department = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores WHERE 
                    Department = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores WHERE 
                    Department = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores WHERE 
                    Department = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        // end Judge number 1
                                        // Judge number 2
                                        else if ($uid == '2') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores_1 WHERE 
                    Department = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores_1 WHERE 
                    Department = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores_1 WHERE 
                    Department = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores_1 WHERE 
                    Department = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        // end Judge number 2
                                        // Judge number 3
                                        else if ($uid == '3') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores_2 WHERE 
                    Department = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores_2 WHERE 
                    Department = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores_2 WHERE 
                    Department = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores_2 WHERE 
                    Department = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        // end Judge number 3
                                        ?>
                                        <td>
                                            <input class="w-50" name="first_dept" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($first_dept_score != "0") {
                                                                                                                                        echo $first_dept_score;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="first_col" oninput="first_col_addition()">
                                        </td>

                                        <td>
                                            <input class="w-50" name="second_dept" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($sec_dept_score != "0") {
                                                                                                                                        echo $sec_dept_score;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="second_col" oninput="second_col_addition()">
                                        </td>
                                        <td>

                                            <input class="w-50" name="third_dept" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($third_dept_score != "0") {
                                                                                                                                        echo $third_dept_score;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="third_col" oninput="third_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="fourth_dept" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($fourth_dept_score != "0") {
                                                                                                                                        echo $fourth_dept_score;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="fourth_col" oninput="fourth_col_addition()">
                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center w-50">
                                            B. Level of Corrective Action (Poka-yoke)
                                        </th>
                                        <td>
                                            45%
                                        </td>
                                        <td>
                                            <input class="w-50" name="first_dept_1" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($first_dept_score_1 != "0") {
                                                                                                                                        echo $first_dept_score_1;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="first_col_1" oninput="first_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="second_dept_1" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($sec_dept_score_1 != "0") {
                                                                                                                                        echo $sec_dept_score_1;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="second_col_1" oninput="second_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="third_dept_1" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($third_dept_score_1 != "0") {
                                                                                                                                        echo $third_dept_score_1;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="third_col_1" oninput="third_col_addition()">
                                        </td>

                                        <td>
                                            <input class="w-50" name="fourth_dept_1" type="number" required min="0" max="45" value="<?php
                                                                                                                                    if ($fourth_dept_score_1 != "0") {
                                                                                                                                        echo $fourth_dept_score_1;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="fourth_col_1" oninput="fourth_col_addition()">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">C. Method of Presentation</th>
                                        <td>
                                            10%
                                        </td>

                                        <td>
                                            <input class="w-50" name="first_dept_2" type="number" required min="0" max="10" value="<?php
                                                                                                                                    if ($first_dept_score_2 != "0") {
                                                                                                                                        echo $first_dept_score_2;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="first_col_2" oninput="first_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="second_dept_2" type="number" required min="0" max="10" value="<?php
                                                                                                                                    if ($sec_dept_score_2 != "0") {
                                                                                                                                        echo $sec_dept_score_2;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="second_col_2" oninput="second_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="third_dept_2" type="number" required min="0" max="10" value="<?php
                                                                                                                                    if ($third_dept_score_2 != "0") {
                                                                                                                                        echo $third_dept_score_2;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="third_col_2" oninput="third_col_addition()">
                                        </td>
                                        <td>
                                            <input class="w-50" name="fourth_dept_2" type="number" required min="0" max="10" value="<?php
                                                                                                                                    if ($fourth_dept_score_2 != "0") {
                                                                                                                                        echo $fourth_dept_score_2;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }

                                                                                                                                    ?>" id="fourth_col_2" oninput="fourth_col_addition()">
                                        </td>

                                    </tr>
                                    <!-- deduction input -->
                                    <tr>
                                        <th scope="row" class="text-left">TOTAL SCORE (SUM)</th>
                                        <td>
                                        </td>
                                        <td>

                                            <input class="w-50" name="first_total" type="number" style="color: darkblue;    font-weight: bold; " value="<?php
                                                                                                                                                        if ($total__ != "") {
                                                                                                                                                            echo $total__;
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        }


                                                                                                                                                        ?>" id="first_sum" readonly>
                                        </td>
                                        <td>
                                            <input class="w-50" name="second_total" type="number" style="color: darkblue;    font-weight: bold; " value="<?php
                                                                                                                                                            if ($sec_total__ != "") {
                                                                                                                                                                echo $sec_total__;
                                                                                                                                                            } else {
                                                                                                                                                                echo "";
                                                                                                                                                            }

                                                                                                                                                            ?>" id="second_sum" readonly>
                                        </td>
                                        <td>
                                            <input class="w-50" name="third_total" type="number" style="color: darkblue;     font-weight: bold;" value="<?php
                                                                                                                                                        if ($third_total__ != "") {
                                                                                                                                                            echo $third_total__;
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        }

                                                                                                                                                        ?>" id="third_sum" readonly>
                                        </td>
                                        <td>
                                            <input class="w-50" name="fourth_total" type="number" style="color: darkblue; font-weight: bold;" value="<?php
                                                                                                                                                        if ($fourth_total__ != "") {
                                                                                                                                                            echo $fourth_total__;
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        }

                                                                                                                                                        ?>" id="fourth_sum" readonly>
                                        </td>
                                    </tr>
                                    <!-- end deduction input -->

                                    <!-- end final score -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <div class="row w-100">
            <div class="col-lg-4 offset-lg-4 d-flex justify-content-center" id="logo_holder">
                <img src="image/logo_1.png" width="40%" height="100%">
            </div>
        </div>

        <script src="bootstrap/jquery.min.js"></script>
        <script src="toastr/toastr.min.js"></script>
        <script>
            function first_col_addition() {
                var column_1_0 = parseInt(document.getElementById("first_col").value, 10);
                var column_1_1 = parseInt(document.getElementById("first_col_1").value, 10);
                var column_1_2 = parseInt(document.getElementById("first_col_2").value, 10);
                var first_total =
                    document.getElementById("first_sum").value = column_1_0 + column_1_1 + column_1_2 ||
                    column_1_0 + column_1_1 ||
                    column_1_1 + column_1_2 ||
                    column_1_0 ||
                    column_1_1 ||
                    column_1_2 ||
                    "0";
            }

            function second_col_addition() {
                var column_2_0 = parseInt(document.getElementById("second_col").value, 10);
                var column_2_1 = parseInt(document.getElementById("second_col_1").value, 10);
                var column_2_2 = parseInt(document.getElementById("second_col_2").value, 10);
                var first_total =
                    document.getElementById("second_sum").value = column_2_0 + column_2_1 + column_2_2 ||
                    column_2_0 + column_2_1 ||
                    column_2_1 + column_2_2 ||
                    column_2_0 ||
                    column_2_1 ||
                    column_2_2 ||
                    "0";
            }

            function third_col_addition() {
                var column_3_0 = parseInt(document.getElementById("third_col").value, 10);
                var column_3_1 = parseInt(document.getElementById("third_col_1").value, 10);
                var column_3_2 = parseInt(document.getElementById("third_col_2").value, 10);
                var first_total =
                    document.getElementById("third_sum").value = column_3_0 + column_3_1 + column_3_2 ||
                    column_3_0 + column_3_1 ||
                    column_3_1 + column_3_2 ||
                    column_3_0 ||
                    column_3_1 ||
                    column_3_2 ||
                    "0";
            }

            function fourth_col_addition() {
                var column_4_0 = parseInt(document.getElementById("fourth_col").value, 10);
                var column_4_1 = parseInt(document.getElementById("fourth_col_1").value, 10);
                var column_4_2 = parseInt(document.getElementById("fourth_col_2").value, 10);
                var first_total =
                    document.getElementById("fourth_sum").value = column_4_0 + column_4_1 + column_4_2 ||
                    column_4_0 + column_4_1 ||
                    column_4_1 + column_4_2 ||
                    column_4_0 ||
                    column_4_1 ||
                    column_4_2 ||
                    "0";
            }


            $(document).ready(function() {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "3000",
                    "timeOut": "3000",
                    "extendedTimeOut": "3000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                };
                // First Row
                $("#first_col").on('change', function() {
                    if ($("#first_col").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#second_col").on('change', function() {
                    if ($("#second_col").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#third_col").on('change', function() {
                    if ($("#third_col").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#fourth_col").on('change', function() {
                    if ($("#fourth_col").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });
                // First Row End



                // Second Row
                $("#first_col_1").on('change', function() {
                    if ($("#first_col_1").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#second_col_1").on('change', function() {
                    if ($("#second_col_1").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#third_col_1").on('change', function() {
                    if ($("#third_col_1").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#fourth_col_1").on('change', function() {
                    if ($("#fourth_col_1").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });
                // Second Row End


                // Third Row 
                $("#first_col_2").on('change', function() {
                    if ($("#first_col_2").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#second_col_2").on('change', function() {
                    if ($("#second_col_2").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#third_col_2").on('change', function() {
                    if ($("#third_col_2").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#fourth_col_2").on('change', function() {
                    if ($("#fourth_col_2").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });
                // Third Row End
            });
        </script>


        <script src="bootstrap/jquery-3.2.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>