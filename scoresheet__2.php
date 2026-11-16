<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">
    <link rel="stylesheet" href="toastr/toastr.min.css">

    <title>Score Sheet - Best Quality Project</title>
    <style>
        h1 {
            color: gray;
            font-weight: bold;
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
        <form method="POST">
            <div class="container w-100 col-lg-11">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 mt-3 text-center border border-dark">
                        <div class="d-flex flex-row">
                            <div class="col-lg-8 mt-3">
                                <h1 class="d-flex">Judge&nbsp;<?php echo $user__id; ?> - <input style="font-weight: bold; color: darkblue; text-align: left; border:0;" name="judge" value="<?php echo $name; ?>" readonly></h1><br>

                            <?php
                        }
                            ?>
                            </div>

                            <div class="col mb-1 mt-4">
                                <ul class="list-inline" id="buttons__">
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn btn-light btn-outline-success" id="save__button" name="save__button_1" onclick="window.onbeforeunload = null;">
                                            Save Rating
                                        </button>
                                    </li>
                                    <!-- <li class="list-inline-item">
                    <button type="submit" class="btn btn-light btn-outline-danger" id="save__button" name="reset__button2">
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
                            <h4 style="background-color: lightgreen; font-size:30px;">
                                BEST QUALITY PROJECT
                            </h4>
                        </div>

                        <div class="col-max">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col" style="float: left; font-size: small;">DEPARTMENT/SECTION</th>
                                        <th scope="col"></th>
                                        <th>
                                            <?php
                                            $get__department = "SELECT * FROM arrangement WHERE id = '1'";
                                            $do__get = mysqli_query($conn, $get__department);
                                            while ($dept = mysqli_fetch_array($do__get)) {
                                            ?>
                                                <input class="w-50 text-center" name="first_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department_2']; ?>" readonly>

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
                                                <input class="w-50 text-center" name="second_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department_2']; ?>" readonly>
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
                                                <input class="w-50 text-center" name="third_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department_2']; ?>" readonly>
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
                                                <input class="w-50 text-center" name="fourth_dept_name" type="text" style="border: 0; font-weight:bold;" value="<?php echo $dept['department_2']; ?>" readonly>

                                            <?php
                                            }
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size: small;">Criteria</th>
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
                                        <th scope="row" class="text-center w-25">A. Background / Theory</th>
                                        <td>
                                            10%
                                        </td>
                                        <?php
                                        $uid = $_SESSION['uid'];
                                        // first dept
                                        $get__department = "SELECT * FROM arrangement WHERE id = '1'";
                                        $do__get = mysqli_query($conn, $get__department);
                                        $departments = mysqli_fetch_array($do__get);
                                        $departments__1 = $departments['department_2'];
                                        // end first dept
                                        // second dept
                                        $get__department_1 = "SELECT * FROM arrangement WHERE id = '2'";
                                        $do__get_1 = mysqli_query($conn, $get__department_1);
                                        $departments_1 = mysqli_fetch_array($do__get_1);
                                        $departments__2 = $departments_1['department_2'];

                                        // end second dept
                                        // third dept
                                        $get__department_2 = "SELECT * FROM arrangement WHERE id = '3'";
                                        $do__get_2 = mysqli_query($conn, $get__department_2);
                                        $departments_2 = mysqli_fetch_array($do__get_2);
                                        $departments__3 = $departments_2['department_2'];

                                        // end third dept
                                        // fourth dept
                                        $get__department_3 = "SELECT * FROM arrangement WHERE id = '4'";
                                        $do__get_3 = mysqli_query($conn, $get__department_3);
                                        $departments_3 = mysqli_fetch_array($do__get_3);
                                        $departments__4 = $departments_3['department_2'];

                                        // end fourth dept
                                        // Judge number 1
                                        if ($uid == '1') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores_3 WHERE 
                    `Department` = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $first_dept_score_3 =  $row['Criteria D'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores_3 WHERE 
                    `Department` = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_dept_score_3 =  $row['Criteria D'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores_3 WHERE 
                    `Department` = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_dept_score_3 =  $row['Criteria D'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores_3 WHERE 
                    `Department` = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_dept_score_3 =  $row['Criteria D'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        // end Judge number 1
                                        // Judge number 2
                                        else if ($uid == '2') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores_4 WHERE 
                    `Department` = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $first_dept_score_3 =  $row['Criteria D'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores_4 WHERE 
                    `Department` = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_dept_score_3 =  $row['Criteria D'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores_4 WHERE 
                    `Department` = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_dept_score_3 =  $row['Criteria D'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores_4 WHERE 
                    `Department` = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_dept_score_3 =  $row['Criteria D'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        // end Judge number 2
                                        // Judge number 3
                                        else if ($uid == '3') {
                                            // first dept scores
                                            $get__scores =
                                                "SELECT * FROM raw_scores_5 WHERE 
                    `Department` = '$departments__1'";
                                            $do_get_scores = mysqli_query($conn, $get__scores);
                                            $row = mysqli_fetch_array($do_get_scores);
                                            $first_dept_score =  $row['Criteria A'];
                                            $first_dept_score_1 =  $row['Criteria B'];
                                            $first_dept_score_2 =  $row['Criteria C'];
                                            $first_dept_score_3 =  $row['Criteria D'];
                                            $total__ = $row['Total Score'];
                                            // end first dept scores
                                            // second dept scores
                                            $get__scores_2 =
                                                "SELECT * FROM raw_scores_5 WHERE 
                    `Department` = '$departments__2'";
                                            $do_get_scores_2 = mysqli_query($conn, $get__scores_2);
                                            $row = mysqli_fetch_array($do_get_scores_2);
                                            $sec_dept_score =  $row['Criteria A'];
                                            $sec_dept_score_1 =  $row['Criteria B'];
                                            $sec_dept_score_2 =  $row['Criteria C'];
                                            $sec_dept_score_3 =  $row['Criteria D'];
                                            $sec_total__ = $row['Total Score'];
                                            // end second dept scores
                                            // third dept scores
                                            $get__scores_3 =
                                                "SELECT * FROM raw_scores_5 WHERE 
                    `Department` = '$departments__3'";
                                            $do_get_scores_3 = mysqli_query($conn, $get__scores_3);
                                            $row = mysqli_fetch_array($do_get_scores_3);
                                            $third_dept_score =  $row['Criteria A'];
                                            $third_dept_score_1 =  $row['Criteria B'];
                                            $third_dept_score_2 =  $row['Criteria C'];
                                            $third_dept_score_3 =  $row['Criteria D'];
                                            $third_total__ = $row['Total Score'];
                                            // end third dept scores
                                            // fourth dept scores
                                            $get__scores_4 =
                                                "SELECT * FROM raw_scores_5 WHERE 
                    `Department` = '$departments__4'";
                                            $do_get_scores_4 = mysqli_query($conn, $get__scores_4);
                                            $row = mysqli_fetch_array($do_get_scores_4);
                                            $fourth_dept_score =  $row['Criteria A'];
                                            $fourth_dept_score_1 =  $row['Criteria B'];
                                            $fourth_dept_score_2 =  $row['Criteria C'];
                                            $fourth_dept_score_3 =  $row['Criteria D'];
                                            $fourth_total__ = $row['Total Score'];
                                            // end fourth dept scores
                                        }
                                        ?>
                                        <td>
                                            <input type="number" min="0" max="10" required class="w-25" value="<?php
                                                                                                                if ($first_dept_score != "0") {
                                                                                                                    echo $first_dept_score;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="first__dept__score" name="first__dept__score" oninput="first_col_addition()">
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="10" class="w-25" required value="<?php
                                                                                                                if ($sec_dept_score != "0") {
                                                                                                                    echo $sec_dept_score;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="second__dept__score" name="second__dept__score" oninput="second_col_addition()">
                                        </td>

                                        <td>

                                            <input type="number" min="0" max="10" class="w-25" required value="<?php
                                                                                                                if ($third_dept_score != "0") {
                                                                                                                    echo $third_dept_score;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="third__dept__score" name="third__dept__score" oninput="third_col_addition()">
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="10" class="w-25" required value="<?php
                                                                                                                if ($fourth_dept_score != "0") {
                                                                                                                    echo $fourth_dept_score;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="fourth__dept__score" name="fourth__dept__score" oninput="fourth_col_addition()">
                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">
                                            B. Data Analysis
                                        </th>
                                        <td>
                                            30%
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="30" required class="w-25" value="<?php
                                                                                                                if ($first_dept_score_1 != "0") {
                                                                                                                    echo $first_dept_score_1;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="first__dept__score_1" name="first__dept__score_1" oninput="first_col_addition()">
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="30" class="w-25" required value="<?php
                                                                                                                if ($sec_dept_score_1 != "0") {
                                                                                                                    echo $sec_dept_score_1;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="second__dept__score_1" name="second__dept__score_1" oninput="second_col_addition()">
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="30" class="w-25" required value="<?php
                                                                                                                if ($third_dept_score_1 != "0") {
                                                                                                                    echo $third_dept_score_1;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="third__dept__score_1" name="third__dept__score_1" oninput="third_col_addition()">
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="30" class="w-25" required value="<?php
                                                                                                                if ($fourth_dept_score_1 != "0") {
                                                                                                                    echo $fourth_dept_score_1;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="fourth__dept__score_1" name="fourth__dept__score_1" oninput="fourth_col_addition()">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">C. Actions and Results</th>
                                        <td>
                                            45%
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="45" class="w-25" required value="<?php
                                                                                                                if ($first_dept_score_2 != "0") {
                                                                                                                    echo $first_dept_score_2;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="first__dept__score_2" name="first__dept__score_2" oninput="first_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="45" class="w-25" required value="<?php
                                                                                                                if ($sec_dept_score_2 != "0") {
                                                                                                                    echo $sec_dept_score_2;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="second__dept__score_2" name="second__dept__score_2" oninput="second_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="45" class="w-25" required value="<?php
                                                                                                                if ($third_dept_score_2 != "0") {
                                                                                                                    echo $third_dept_score_2;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="third__dept__score_2" name="third__dept__score_2" oninput="third_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="45" class="w-25" required value="<?php
                                                                                                                if ($fourth_dept_score_2 != "0") {
                                                                                                                    echo $fourth_dept_score_2;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="fourth__dept__score_2" name="fourth__dept__score_2" oninput="fourth_col_addition()">
                                        </td>
                                    </tr>

                                    <!-- D -->
                                    <tr>
                                        <th scope="row" class="text-center">D. Conclusion / Recommendation</th>
                                        <td>
                                            15%
                                        </td>

                                        <td>
                                            <input type="number" min="0" max="15" class="w-25" required value="<?php
                                                                                                                if ($first_dept_score_3 != "0") {
                                                                                                                    echo $first_dept_score_3;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="first__dept__score_3" name="first__dept__score_3" oninput="first_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="15" class="w-25" required value="<?php
                                                                                                                if ($sec_dept_score_3 != "0") {
                                                                                                                    echo $sec_dept_score_3;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="second__dept__score_3" name="second__dept__score_3" oninput="second_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="15" class="w-25" required value="<?php
                                                                                                                if ($third_dept_score_3 != "0") {
                                                                                                                    echo $third_dept_score_3;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="third__dept__score_3" name="third__dept__score_3" oninput="third_col_addition()">
                                        </td>
                                        <td>
                                            <input type="number" min="0" max="15" class="w-25" required value="<?php
                                                                                                                if ($fourth_dept_score_3 != "0") {
                                                                                                                    echo $fourth_dept_score_3;
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>" id="fourth__dept__score_3" name="fourth__dept__score_3" oninput="fourth_col_addition()">
                                        </td>
                                    </tr>


                                    <!-- deduction input -->
                                    <tr>
                                        <th scope="row" class="text-left">TOTAL SCORE (SUM)</th>
                                        <td>
                                        </td>
                                        <td>
                                            <input type="number" class="w-25" style="color: darkblue; font-weight: bold;" value="<?php
                                                                                                                                    if ($total__ != "") {
                                                                                                                                        echo $total__;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }
                                                                                                                                    ?>" id="first__dept__total" name="first__dept__total" readonly>
                                        </td>
                                        <td>
                                            <input type="number" class="w-25" style="color: darkblue; font-weight: bold;" value="<?php
                                                                                                                                    if ($sec_total__ != "") {
                                                                                                                                        echo $sec_total__;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }
                                                                                                                                    ?>" id="second__dept__total" name="second__dept__total" readonly>
                                        </td>

                                        <td>
                                            <input type="number" class="w-25" style="color: darkblue; font-weight: bold;" value="<?php
                                                                                                                                    if ($third_total__ != "") {
                                                                                                                                        echo $third_total__;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }
                                                                                                                                    ?>" id="third__dept__total" name="third__dept__total" readonly>
                                        </td>

                                        <td>
                                            <input type="number" class="w-25" style="color: darkblue; font-weight: bold;" value="<?php
                                                                                                                                    if ($fourth_total__ != "") {
                                                                                                                                        echo $fourth_total__;
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }
                                                                                                                                    ?>" id="fourth__dept__total" name="fourth__dept__total" readonly>
                                        </td>
                                    </tr>
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
                var row_1_score = parseInt(document.getElementById("first__dept__score").value, 10);
                var row_2_score = parseInt(document.getElementById("first__dept__score_1").value, 10);
                var row_3_score = parseInt(document.getElementById("first__dept__score_2").value, 10);
                var row_4_score = parseInt(document.getElementById("first__dept__score_3").value, 10);

                var first_col_total =
                    document.getElementById("first__dept__total").value =
                    row_1_score + row_2_score + row_3_score + row_4_score ||
                    row_1_score + row_2_score + row_3_score ||
                    row_1_score + row_2_score ||
                    row_1_score ||
                    row_2_score ||
                    row_3_score ||
                    row_4_score ||
                    "0";
            }

            function second_col_addition() {
                var row_1_score = parseInt(document.getElementById("second__dept__score").value, 10);
                var row_2_score = parseInt(document.getElementById("second__dept__score_1").value, 10);
                var row_3_score = parseInt(document.getElementById("second__dept__score_2").value, 10);
                var row_4_score = parseInt(document.getElementById("second__dept__score_3").value, 10);

                var first_col_total =
                    document.getElementById("second__dept__total").value =
                    row_1_score + row_2_score + row_3_score + row_4_score ||
                    row_1_score + row_2_score + row_3_score ||
                    row_1_score + row_2_score ||
                    row_1_score ||
                    row_2_score ||
                    row_3_score ||
                    row_4_score ||
                    "0";
            }

            function third_col_addition() {
                var row_1_score = parseInt(document.getElementById("third__dept__score").value, 10);
                var row_2_score = parseInt(document.getElementById("third__dept__score_1").value, 10);
                var row_3_score = parseInt(document.getElementById("third__dept__score_2").value, 10);
                var row_4_score = parseInt(document.getElementById("third__dept__score_3").value, 10);

                var first_col_total =
                    document.getElementById("third__dept__total").value =
                    row_1_score + row_2_score + row_3_score + row_4_score ||
                    row_1_score + row_2_score + row_3_score ||
                    row_1_score + row_2_score ||
                    row_1_score ||
                    row_2_score ||
                    row_3_score ||
                    row_4_score ||
                    "0";
            }

            function fourth_col_addition() {
                var row_1_score = parseInt(document.getElementById("fourth__dept__score").value, 10);
                var row_2_score = parseInt(document.getElementById("fourth__dept__score_1").value, 10);
                var row_3_score = parseInt(document.getElementById("fourth__dept__score_2").value, 10);
                var row_4_score = parseInt(document.getElementById("fourth__dept__score_3").value, 10);

                var first_col_total =
                    document.getElementById("fourth__dept__total").value =
                    row_1_score + row_2_score + row_3_score + row_4_score ||
                    row_1_score + row_2_score + row_3_score ||
                    row_1_score + row_2_score ||
                    row_1_score ||
                    row_2_score ||
                    row_3_score ||
                    row_4_score ||
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
                $("#first__dept__score").on('change', function() {
                    if ($("#first__dept__score").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#second__dept__score").on('change', function() {
                    if ($("#second__dept__score").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#third__dept__score").on('change', function() {
                    if ($("#third__dept__score").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });

                $("#fourth__dept__score").on('change', function() {
                    if ($("#fourth__dept__score").val() > 10) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 10");
                    }
                });
                //First Row End



                // Second Row
                $("#first__dept__score_1").on('change', function() {
                    if ($("#first__dept__score_1").val() > 30) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 30");
                    }
                });

                $("#second__dept__score_1").on('change', function() {
                    if ($("#second__dept__score_1").val() > 30) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 30");
                    }
                });

                $("#third__dept__score_1").on('change', function() {
                    if ($("#third__dept__score_1").val() > 30) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 30");
                    }
                });

                $("#fourth__dept__score_1").on('change', function() {
                    if ($("#fourth__dept__score_1").val() > 30) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 30");
                    }
                });
                // Second Row End


                // Third Row 
                $("#first__dept__score_2").on('change', function() {
                    if ($("#first__dept__score_2").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#second__dept__score_2").on('change', function() {
                    if ($("#second__dept__score_2").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#third__dept__score_2").on('change', function() {
                    if ($("#third__dept__score_2").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });

                $("#fourth__dept__score_2").on('change', function() {
                    if ($("#fourth__dept__score_2").val() > 45) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 45");
                    }
                });
                // Third Row End

                // Fourth Row 
                $("#first__dept__score_3").on('change', function() {
                    if ($("#first__dept__score_3").val() > 15) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 15");
                    }
                });

                $("#second__dept__score_3").on('change', function() {
                    if ($("#second__dept__score_3").val() > 15) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 15");
                    }
                });

                $("#third__dept__score_3").on('change', function() {
                    if ($("#third__dept__score_3").val() > 15) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 15");
                    }
                });

                $("#fourth__dept__score_3").on('change', function() {
                    if ($("#fourth__dept__score_3").val() > 15) {
                        $(this).val("");
                        toastr.warning("Must be less than or equal to 15");
                    }
                });
                // Fourth Row End
            });
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>