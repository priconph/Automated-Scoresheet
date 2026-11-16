<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">

    <title>Overall Score Sheet - Best Analysis and Corrective Action</title>
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

    <form method="POST">
        <div class="container w-100">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 mt-3 text-center border border-dark">
                    <div class="col-md-12">
                        <h1>OVERALL SCORE SHEET</h1>
                    </div>

                    <div class="col offset-md-4 mb-1">
                        <ul class="list-inline" id="buttons__">
                            <li class="list-inline-item">
                                <button class="btn btn-success" type="submit" name="save__final__button" onclick="window.onbeforeunload = null;">
                                    Save
                                </button>
                            </li>

                            <li class="list-inline-item">
                                <a href="exportSample.php" class="btn btn-warning" onclick="window.onbeforeunload = null;">
                                    Export
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <button class="btn btn-danger" type="submit" name="reset__button" onclick=" window.onbeforeunload = null; return confirm('Are you sure you want to Reset?'); ">
                                    Reset
                                </button>
                            </li>

                            </li>
                            <li class="list-inline-item">
                                <a href="organizer__menu.php" class="btn btn-primary ml-5">Exit</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-max text-center">
                        <h4 style="background-color: orange;">
                            BEST ANALYSIS AND CORRECTIVE ACTION
                        </h4>
                    </div>

                    <div class="col-max">
                        <table class="table table-bordered table-hover table-sm table-responsive">
                            <?php
                            include_once 'process.php';
                            // get judge 1
                            $get__id = "SELECT `name` FROM login__data WHERE id = '1'";
                            $do__id = mysqli_query($conn, $get__id);
                            $row__1 = mysqli_fetch_array($do__id);
                            $judge__name = $row__1['name'];
                            $_SESSION['judge'] = $judge__name;
                            $judges = $_SESSION['judge'];
                            // end get judge 1 

                            // get judge 2
                            $get__id_1 = "SELECT `name` FROM login__data WHERE id = '2'";
                            $do__id_1 = mysqli_query($conn, $get__id_1);
                            $row__2 = mysqli_fetch_array($do__id_1);
                            $judge__name_1 = $row__2['name'];
                            $_SESSION['judge_2'] = $judge__name_1;
                            $judges_1 = $_SESSION['judge_2'];
                            // end get judge 2 

                            // get judge 2
                            $get__id_2 = "SELECT `name` FROM login__data WHERE id = '3'";
                            $do__id_2 = mysqli_query($conn, $get__id_2);
                            $row__3 = mysqli_fetch_array($do__id_2);
                            $judge__name_2 = $row__3['name'];
                            $_SESSION['judge_3'] = $judge__name_2;
                            $judges_2 = $_SESSION['judge_3'];
                            // end get judge 2 

                            // department arrangement
                            $get__dept = "SELECT department FROM arrangement WHERE id = '1'";
                            $do__get = mysqli_query($conn, $get__dept);
                            $row__4 = mysqli_fetch_array($do__get);
                            $department_1 = $row__4['department'];
                            $_SESSION['department_1'] = $department_1;
                            $department_display = $_SESSION['department_1'];

                            $get__dept_1 = "SELECT department FROM arrangement WHERE id = '2'";
                            $do__get_1 = mysqli_query($conn, $get__dept_1);
                            $row__5 = mysqli_fetch_array($do__get_1);
                            $department_2 = $row__5['department'];
                            $_SESSION['department_2'] = $department_2;
                            $department_display_1 = $_SESSION['department_2'];

                            $get__dept_2 = "SELECT department FROM arrangement WHERE id = '3'";
                            $do__get_2 = mysqli_query($conn, $get__dept_2);
                            $row__6 = mysqli_fetch_array($do__get_2);
                            $department_3 = $row__6['department'];
                            $_SESSION['department_3'] = $department_3;
                            $department_display_2 = $_SESSION['department_3'];

                            $get__dept_3 = "SELECT department FROM arrangement WHERE id = '4'";
                            $do__get_3 = mysqli_query($conn, $get__dept_3);
                            $row__7 = mysqli_fetch_array($do__get_3);
                            $department_4 = $row__7['department'];
                            $_SESSION['department_4'] = $department_4;
                            $department_display_3 = $_SESSION['department_4'];
                            // end department arrangement
                            // get scores
                            $get__score = "SELECT `Total Score` 
FROM raw_scores 
    WHERE 
    `Department` = '$department_display' 
        AND 
    `Judge Name` = '$judges'";
                            $score = mysqli_query($conn, $get__score);
                            $display = mysqli_fetch_array($score);
                            $display_score_1 = $display['Total Score'];

                            $get__score_1 = "SELECT `Total Score` 
FROM raw_scores 
    WHERE 
    `Department` = '$department_display_1' 
        AND 
        `Judge Name` = '$judges'";
                            $score_1 = mysqli_query($conn, $get__score_1);
                            $display_1 = mysqli_fetch_array($score_1);
                            $display_score_2 = $display_1['Total Score'];

                            $get__score_2 = "SELECT `Total Score`
FROM raw_scores 
    WHERE 
    `Department` = '$department_display_2' 
        AND 
        `Judge Name` = '$judges'";
                            $score_2 = mysqli_query($conn, $get__score_2);
                            $display_3 = mysqli_fetch_array($score_2);
                            $display_score_3 = $display_3['Total Score'];

                            $get__score_3 = "SELECT `Total Score` 
FROM raw_scores 
    WHERE 
    `Department` = '$department_display_3' 
        AND 
        `Judge Name` = '$judges'";
                            $score_3 = mysqli_query($conn, $get__score_3);
                            $display_4 = mysqli_fetch_array($score_3);
                            $display_score_4 = $display_4['Total Score'];
                            // end get scores


                            $get__score = "SELECT `Total Score` 
FROM raw_scores_1
WHERE 
`Department` = '$department_display' 
    AND 
    `Judge Name` = '$judges_1'";
                            $score = mysqli_query($conn, $get__score);
                            $display = mysqli_fetch_array($score);
                            $display_score_5 = $display['Total Score'];

                            $get__score_1 = "SELECT `Total Score` 
FROM raw_scores_1 
WHERE 
`Department` = '$department_display_1' 
    AND 
    `Judge Name` = '$judges_1'";
                            $score_1 = mysqli_query($conn, $get__score_1);
                            $display_1 = mysqli_fetch_array($score_1);
                            $display_score_6 = $display_1['Total Score'];

                            $get__score_2 = "SELECT `Total Score` 
FROM raw_scores_1 
WHERE 
`Department` = '$department_display_2' 
    AND 
    `Judge Name` = '$judges_1'";
                            $score_2 = mysqli_query($conn, $get__score_2);
                            $display_3 = mysqli_fetch_array($score_2);
                            $display_score_7 = $display_3['Total Score'];

                            $get__score_3 = "SELECT `Total Score` 
FROM raw_scores_1 
WHERE 
`Department` = '$department_display_3' 
    AND 
    `Judge Name` = '$judges_1'";
                            $score_3 = mysqli_query($conn, $get__score_3);
                            $display_4 = mysqli_fetch_array($score_3);
                            $display_score_8 = $display_4['Total Score'];
                            // end get scores


                            $get__score = "SELECT `Total Score` 
FROM raw_scores_2
WHERE 
`Department` = '$department_display' 
AND 
`Judge Name` = '$judges_2'";
                            $score = mysqli_query($conn, $get__score);
                            $display = mysqli_fetch_array($score);
                            $display_score_9 = $display['Total Score'];

                            $get__score_1 = "SELECT `Total Score` 
FROM raw_scores_2 
WHERE 
`Department` = '$department_display_1' 
AND 
`Judge Name` = '$judges_2'";
                            $score_1 = mysqli_query($conn, $get__score_1);
                            $display_1 = mysqli_fetch_array($score_1);
                            $display_score_10 = $display_1['Total Score'];

                            $get__score_2 = "SELECT `Total Score` 
FROM raw_scores_2 
WHERE 
`Department` = '$department_display_2' 
AND 
`Judge Name` = '$judges_2'";
                            $score_2 = mysqli_query($conn, $get__score_2);
                            $display_3 = mysqli_fetch_array($score_2);
                            $display_score_11 = $display_3['Total Score'];

                            $get__score_3 = "SELECT `Total Score` 
FROM raw_scores_2 
WHERE 
`Department` = '$department_display_3' 
AND 
`Judge Name` = '$judges_2'";
                            $score_3 = mysqli_query($conn, $get__score_3);
                            $display_4 = mysqli_fetch_array($score_3);
                            $display_score_12 = $display_4['Total Score'];
                            // end get scores
                            ?>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th><input type="text" style="width: 30%; border: 0; font-weight:bold;" value="<?php echo $department_display; ?>" name="first__dept" readonly></th>
                                    <th><input type="text" style="width: 30%; border: 0; font-weight:bold;" value="<?php echo $department_display_1; ?>" name="sec__dept" readonly></th>
                                    <th><input type="text" style="width: 30%; border: 0; font-weight:bold;" value="<?php echo $department_display_2; ?>" name="third__dept" readonly></th>
                                    <th><input type="text" style="width: 30%; border: 0; font-weight:bold;" value="<?php echo $department_display_3; ?>" name="fourth__dept" readonly></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-left"><?php echo $judges; ?></th>

                                    <td>
                                        <input id="score_1" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_1; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_4" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_2; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_7" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_3; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_10" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_4; ?>" readonly>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row" class="text-left"><?php echo $judges_1; ?></th>
                                    <td>
                                        <input id="score_2" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_5; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_5" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_6; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_8" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_7; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_11" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_8; ?>" readonly>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row" class="text-left"><?php echo $judges_2; ?></th>
                                    <td>
                                        <input id="score_3" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_9; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_6" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_10; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_9" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_11; ?>" readonly>
                                    </td>
                                    <td>
                                        <input id="score_12" style="width: 30px; border: 0;" type="text" value="<?php echo $display_score_12; ?>" readonly>
                                    </td>
                                </tr>
                                <?php
                                $get__scores_1 = "SELECT * FROM final_scores WHERE `Department` = '$department_display'";
                                $do__query_1 = mysqli_query($conn, $get__scores_1);
                                $display_scores_1 = mysqli_fetch_array($do__query_1);
                                $total_score_1 = $display_scores_1['Total Score'];
                                $deduction_1 = $display_scores_1['Final Score'];
                                $deduc_1 = $display_scores_1['Deduction'];

                                $get__scores_2 = "SELECT * FROM final_scores WHERE `Department` = '$department_display_1'";
                                $do__query_2 = mysqli_query($conn, $get__scores_2);
                                $display_scores_2 = mysqli_fetch_array($do__query_2);
                                $total_score_2 = $display_scores_2['Total Score'];
                                $deduction_2 = $display_scores_2['Final Score'];
                                $deduc_2 = $display_scores_2['Deduction'];


                                $get__scores_3 = "SELECT * FROM final_scores WHERE `Department` = '$department_display_2'";
                                $do__query_3 = mysqli_query($conn, $get__scores_3);
                                $display_scores_3 = mysqli_fetch_array($do__query_3);
                                $total_score_3 = $display_scores_3['Total Score'];
                                $deduction_3 = $display_scores_3['Final Score'];
                                $deduc_3 = $display_scores_3['Deduction'];


                                $get__scores_4 = "SELECT * FROM final_scores WHERE `Department` = '$department_display_3'";
                                $do__query_4 = mysqli_query($conn, $get__scores_4);
                                $display_scores_4 = mysqli_fetch_array($do__query_4);
                                $total_score_4 = $display_scores_4['Total Score'];
                                $deduction_4 = $display_scores_4['Final Score'];
                                $deduc_4 = $display_scores_4['Deduction'];

                                ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <input style="width: 60px; border: 0;" type="text" value="<?php echo $total_score_1; ?>" id="first_total" name="first_total" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0;" type="text" value="<?php echo $total_score_2; ?>" id="second_total" name="second_total" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0;" type="text" value="<?php echo $total_score_3; ?>" id="third_total" name="third_total" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0;" type="text" value="<?php echo $total_score_4; ?>" id="fourth_total" name="fourth_total" readonly>
                                    </td>
                                </tr>
                                <!-- deduction input -->
                                <tr>
                                    <th scope="row" class="text-left">Deductions:</th>
                                    <td>
                                        <input style="width: 60px; color:red; font-weight: bold;" type="number" step="0.01" min="0" value="<?php
                                                                                                                                            if ($deduc_1 != "0" || $deduc_1 == "0") {
                                                                                                                                                echo $deduc_1;
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }  ?>" id="deduction_value_1" name="deduction_value_1" oninput="first_col_addition()">
                                    </td>
                                    <td>
                                        <input style="width: 60px; color:red; font-weight: bold;" type="number" step="0.01" min="0" value="<?php
                                                                                                                                            if ($deduc_2 != "0" || $deduc_2 == "0") {
                                                                                                                                                echo $deduc_2;
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }
                                                                                                                                            ?>" id="deduction_value_2" name="deduction_value_2" oninput="first_col_addition()">
                                    </td>
                                    <td>
                                        <input style="width: 60px; color:red;     font-weight: bold;" type="number" step="0.01" min="0" value="<?php
                                                                                                                                                if ($deduc_3 != "0" || $deduc_3 == "0") {
                                                                                                                                                    echo $deduc_3;
                                                                                                                                                } else {
                                                                                                                                                    echo "";
                                                                                                                                                }  ?>" id="deduction_value_3" name="deduction_value_3" oninput="first_col_addition()">
                                    </td>
                                    <td>
                                        <input style="width: 60px; color:red;  font-weight: bold;" type="number" step="0.01" min="0" value="<?php
                                                                                                                                            if ($deduc_4 != "0" || $deduc_4 == "0") {
                                                                                                                                                echo $deduc_4;
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            }  ?>" id="deduction_value_4" name="deduction_value_4" oninput="first_col_addition()">
                                    </td>
                                </tr>
                                <!-- end deduction input -->
                                <!-- final score -->
                                <tr>
                                    <th scope="row" class="text-left">Final Score:</th>
                                    <td>
                                        <input style="width: 60px; border: 0; color: darkblue; font-weight: bold;" type="text" value=" <?php echo $deduction_1; ?>" id="final_score_1" name="final_score_1" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0; color: darkblue; font-weight: bold;" type="text" value=" <?php echo $deduction_2; ?>" id="final_score_2" name="final_score_2" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0; color: darkblue; font-weight: bold;" type="text" value=" <?php echo $deduction_3; ?>" id="final_score_3" name="final_score_3" readonly>
                                    </td>
                                    <td>
                                        <input style="width: 60px; border: 0; color: darkblue; font-weight: bold;" type="text" value=" <?php echo $deduction_4; ?>" id="final_score_4" name="final_score_4" readonly>
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
    <script>
        function first_col_addition() {
            // first column
            var row_1_score = parseFloat(document.getElementById("score_1").value);
            var row_2_score = parseFloat(document.getElementById("score_2").value);
            var row_3_score = parseFloat(document.getElementById("score_3").value);


            var first_col_total = row_1_score + row_2_score + row_3_score;

            var division_ = first_col_total / 3;

            var dvsion = division_.toFixed(2);

            document.getElementById("first_total").value = dvsion;
            // end first column
            // second column
            var row_4_score = parseFloat(document.getElementById("score_4").value);
            var row_5_score = parseFloat(document.getElementById("score_5").value);
            var row_6_score = parseFloat(document.getElementById("score_6").value);


            var sec_col_total = row_4_score + row_5_score + row_6_score;

            var division_ = sec_col_total / 3;

            var dvsion = division_.toFixed(2);

            document.getElementById("second_total").value = dvsion;
            // end second column
            // third column
            var row_7_score = parseFloat(document.getElementById("score_7").value);
            var row_8_score = parseFloat(document.getElementById("score_8").value);
            var row_9_score = parseFloat(document.getElementById("score_9").value);


            var third_col_total = row_7_score + row_8_score + row_9_score;

            var division_ = third_col_total / 3;

            var dvsion = division_.toFixed(2);

            document.getElementById("third_total").value = dvsion;
            // end third column
            // fourth column
            var row_10_score = parseFloat(document.getElementById("score_10").value);
            var row_11_score = parseFloat(document.getElementById("score_11").value);
            var row_12_score = parseFloat(document.getElementById("score_12").value);


            var fourth_col_total = row_10_score + row_11_score + row_12_score;

            var division_ = fourth_col_total / 3;

            var dvsion = division_.toFixed(2);

            document.getElementById("fourth_total").value = dvsion;
            // end fourth column

            // final score 1
            var first__total = parseFloat(document.getElementById("first_total").value, 10);
            var second__total = parseFloat(document.getElementById("second_total").value, 10);
            var third__total = parseFloat(document.getElementById("third_total").value, 10);
            var fourth__total = parseFloat(document.getElementById("fourth_total").value, 10);

            var first__deduction = parseFloat(document.getElementById("deduction_value_1").value ||
                document.getElementById("deduction_value_1").value | 0);

            var second__deduction = parseFloat(document.getElementById("deduction_value_2").value ||
                document.getElementById("deduction_value_2").value | 0);

            var third__deduction = parseFloat(document.getElementById("deduction_value_3").value ||
                document.getElementById("deduction_value_3").value | 0);

            var fourth__deduction = parseFloat(document.getElementById("deduction_value_4").value ||
                document.getElementById("deduction_value_4").value | 0);

            var final_1 = first__total - first__deduction;

            var final__score__1 = final_1.toFixed(2);

            document.getElementById("final_score_1").value = final__score__1;
            // end final score 1
            // final score 2
            var final_2 = second__total - second__deduction;

            var final__score__2 = final_2.toFixed(2);

            document.getElementById("final_score_2").value = final__score__2;
            // end final score 2
            // final score 3
            var final_3 = third__total - third__deduction;

            var final__score__3 = final_3.toFixed(2);

            document.getElementById("final_score_3").value = final__score__3;
            // end final score 3
            // final score 4
            var final_4 = fourth__total - fourth__deduction;

            var final__score__4 = final_4.toFixed(2);

            document.getElementById("final_score_4").value = final__score__4;
            // end final score 4
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>