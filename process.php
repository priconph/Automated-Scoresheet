<?php
include 'connection.php';

// for login
if (isset($_REQUEST['login__button'])) {
    $uname = $_REQUEST['user__username'];
    $pass = $_REQUEST['user__password'];

    $check__db__cred = "SELECT * FROM login__data WHERE username = '$uname' AND password = '$pass'";
    $do__query = mysqli_query($conn, $check__db__cred);

    while ($row = mysqli_fetch_array($do__query)) {
        $username = $row['username'];
        $password = $row['password'];
        $user__name = $row['name'];
        $categ = $row['category'];

        if ($username == $uname and $password == $pass and $categ == "Judge") {
            $_SESSION['category_user'] = $categ;
            $_SESSION['user'] = $user__name;
            echo
            '<script type="text/JavaScript">
                    alert("Login Success");
                        window.location.href = "user__menu.php";
                </script>
                ';
        } else if ($username == $uname and $password == $pass and $categ == "Administrator") {
            $_SESSION['category_user'] = $categ;
            $_SESSION['user'] = $user__name;
            echo
            '<script type="text/JavaScript">
                    alert("Login Success");
                        window.location.href = "organizer__menu.php";
                </script>
                ';
        } else if ($username == $uname and $password == $pass and $categ == "Organizer") {
            $_SESSION['category_user'] = $categ;
            $_SESSION['user'] = $user__name;
            echo
            '<script type="text/JavaScript">
                    alert("Login Success");
                        window.location.href = "organizer__menu.php";
                </script>
                ';
        }
    }
    if ($username != $uname and $password != $pass) {
        echo
        '<script type="text/JavaScript">
                    alert("Wrong username or password");
                        window.location.href = "index.php";
                </script>
                ';
    }
}
// end for login
// for updating arrangement
if (isset($_REQUEST['update__button'])) {
    // department arrangement for baca
    $first = $_REQUEST['first__department'];
    $second = $_REQUEST['second__department'];
    $third = $_REQUEST['third__department'];
    $fourth = $_REQUEST['fourth__department'];
    // end department arrangement for baca
    // department arrangement for bqp
    $first_1 = $_REQUEST['first__department_1'];
    $second_1 = $_REQUEST['second__department_1'];
    $third_1 = $_REQUEST['third__department_1'];
    $fourth_1 = $_REQUEST['fourth__department_1'];
    // end department arrangement for bqp
    // first
    $update__arrangement = "UPDATE arrangement 
        SET  `department` = '$first' WHERE id = '1'";

    mysqli_query($conn, $update__arrangement) or die("Query Failed! SQL: $update__arrangement - Error: " . mysqli_error($conn));
    // end first
    // second
    $update__arrangement_1 = "UPDATE arrangement 
        SET  `department` = '$second' WHERE id = '2'";

    mysqli_query($conn, $update__arrangement_1) or die("Query Failed! SQL: $update__arrangement_1 - Error: " . mysqli_error($conn));
    // end second
    // third
    $update__arrangement_2 = "UPDATE arrangement 
        SET     `department` = '$third' WHERE id = '3'";

    mysqli_query($conn, $update__arrangement_2) or die("Query Failed! SQL: $update__arrangement_2 - Error: " . mysqli_error($conn));
    // end third
    // fourth
    $update__arrangement_3 = "UPDATE arrangement 
        SET   `department` = '$fourth' WHERE id = '4'";

    mysqli_query($conn, $update__arrangement_3) or die("Query Failed! SQL: $update__arrangement_3 - Error: " . mysqli_error($conn));
    // end fourth
    // fifth
    $update__arrangement_4 = "UPDATE arrangement 
        SET   `department_2` = '$first_1' WHERE id = '1'";

    mysqli_query($conn, $update__arrangement_4) or die("Query Failed! SQL: $update__arrangement_4 - Error: " . mysqli_error($conn));
    // end fifth
    // sixth
    $update__arrangement_5 = "UPDATE arrangement 
        SET    `department_2` = '$second_1' WHERE id = '2'";

    mysqli_query($conn, $update__arrangement_5) or die("Query Failed! SQL: $update__arrangement_5 - Error: " . mysqli_error($conn));
    // end sixth
    // seventh
    $update__arrangement_6 = "UPDATE arrangement 
        SET   `department_2` = '$third_1' WHERE id = '3'";

    mysqli_query($conn, $update__arrangement_6) or die("Query Failed! SQL: $update__arrangement_6 - Error: " . mysqli_error($conn));
    // end seventh
    // eighth
    $update__arrangement_7 = "UPDATE arrangement 
        SET   `department_2` = '$fourth_1' WHERE id = '4'";

    mysqli_query($conn, $update__arrangement_7) or die("Query Failed! SQL: $update__arrangement_7 - Error: " . mysqli_error($conn));
    // end eighth       
    echo
    '<script type="text/JavaScript">
        alert("Update Success");
            window.location.href = "organizer__menu.php";
    </script>
    ';
}
// end for updating arrangement
// for scoring scoresheet1
if (isset($_REQUEST['save__button'])) {
    // sum of columns
    $sum_first_col = $_REQUEST['first_total'];
    $sum_second_col = $_REQUEST['second_total'];
    $sum_third_col = $_REQUEST['third_total'];
    $sum_fourth_col = $_REQUEST['fourth_total'];
    // end sum of columns
    //  department arrangement
    $first_department = $_REQUEST['first_dept_name'];
    $second_department = $_REQUEST['second_dept_name'];
    $third_department = $_REQUEST['third_dept_name'];
    $fourth_department = $_REQUEST['fourth_dept_name'];
    // end department arrangement
    // criteria A score per column
    $criteria_a_col_1 = $_REQUEST['first_dept'];
    $criteria_a_col_2 = $_REQUEST['second_dept'];
    $criteria_a_col_3 = $_REQUEST['third_dept'];
    $criteria_a_col_4 = $_REQUEST['fourth_dept'];
    // end criteria A score per column
    // criteria B score per column
    $criteria_b_col_1 = $_REQUEST['first_dept_1'];
    $criteria_b_col_2 = $_REQUEST['second_dept_1'];
    $criteria_b_col_3 = $_REQUEST['third_dept_1'];
    $criteria_b_col_4 = $_REQUEST['fourth_dept_1'];
    // end criteria B score per column
    // criteria C score per column
    $criteria_c_col_1 = $_REQUEST['first_dept_2'];
    $criteria_c_col_2 = $_REQUEST['second_dept_2'];
    $criteria_c_col_3 = $_REQUEST['third_dept_2'];
    $criteria_c_col_4 = $_REQUEST['fourth_dept_2'];
    // end criteria C score per column

    $judge__name = $_REQUEST['judge'];
    $get__judge__arrangement = "SELECT * FROM login__data WHERE `name` = '$judge__name'";
    $result = mysqli_query($conn, $get__judge__arrangement);
    $names = mysqli_fetch_array($result);
    $judge = $names['name'];
    $judge_uid = $names['id'];

    if ($judge__name == $judge && $judge_uid == '1') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores SET 
        `Department` = '$first_department', 
        `Total Score` = '$sum_first_col', 
        `Criteria A` = '$criteria_a_col_1', 
        `Criteria B` = '$criteria_b_col_1',
        `Criteria C` = '$criteria_c_col_1',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores SET 
        `Department` = '$second_department', 
        `Total Score` = '$sum_second_col', 
        `Criteria A` = '$criteria_a_col_2', 
        `Criteria B` = '$criteria_b_col_2',
        `Criteria C` = '$criteria_c_col_2',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores SET 
        `Department` = '$third_department', 
        `Total Score` = '$sum_third_col', 
        `Criteria A` = '$criteria_a_col_3', 
        `Criteria B` = '$criteria_b_col_3',
        `Criteria C` = '$criteria_c_col_3',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores SET 
        `Department` = '$fourth_department', 
        `Total Score` = '$sum_fourth_col', 
        `Criteria A` = '$criteria_a_col_4', 
        `Criteria B` = '$criteria_b_col_4',
        `Criteria C` = '$criteria_c_col_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    } else if ($judge__name == $judge && $judge_uid == '2') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores_1 SET 
        `Department` = '$first_department', 
        `Total Score` = '$sum_first_col', 
        `Criteria A` = '$criteria_a_col_1', 
        `Criteria B` = '$criteria_b_col_1',
        `Criteria C` = '$criteria_c_col_1',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores_1 SET 
        `Department` = '$second_department', 
        `Total Score` = '$sum_second_col', 
        `Criteria A` = '$criteria_a_col_2', 
        `Criteria B` = '$criteria_b_col_2',
        `Criteria C` = '$criteria_c_col_2',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores_1 SET 
        `Department` = '$third_department', 
        `Total Score` = '$sum_third_col', 
        `Criteria A` = '$criteria_a_col_3', 
        `Criteria B` = '$criteria_b_col_3',
        `Criteria C` = '$criteria_c_col_3',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores_1 SET 
        `Department` = '$fourth_department', 
        `Total Score` = '$sum_fourth_col', 
        `Criteria A` = '$criteria_a_col_4', 
        `Criteria B` = '$criteria_b_col_4',
        `Criteria C` = '$criteria_c_col_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    } else if ($judge__name == $judge && $judge_uid == '3') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores_2 SET 
        `Department` = '$first_department', 
        `Total Score` = '$sum_first_col', 
        `Criteria A` = '$criteria_a_col_1', 
        `Criteria B` = '$criteria_b_col_1',
        `Criteria C` = '$criteria_c_col_1',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores_2 SET 
        `Department` = '$second_department', 
        `Total Score` = '$sum_second_col', 
        `Criteria A` = '$criteria_a_col_2', 
        `Criteria B` = '$criteria_b_col_2',
        `Criteria C` = '$criteria_c_col_2',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores_2 SET 
        `Department` = '$third_department', 
        `Total Score` = '$sum_third_col', 
        `Criteria A` = '$criteria_a_col_3', 
        `Criteria B` = '$criteria_b_col_3',
        `Criteria C` = '$criteria_c_col_3',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores_2 SET 
        `Department` = '$fourth_department', 
        `Total Score` = '$sum_fourth_col', 
        `Criteria A` = '$criteria_a_col_4', 
        `Criteria B` = '$criteria_b_col_4',
        `Criteria C` = '$criteria_c_col_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    }

    echo
    '<script type="text/JavaScript">
        alert("Save Success");
    </script>
    ';
}
// end for scoring scoresheet1
// for scoring scoresheet2
if (isset($_REQUEST['save__button_1'])) {
    // dept
    $dept_1 = $_REQUEST['first_dept_name'];
    $dept_2 = $_REQUEST['second_dept_name'];
    $dept_3 = $_REQUEST['third_dept_name'];
    $dept_4 = $_REQUEST['fourth_dept_name'];
    // end dept
    // column 1 score
    $bqp_a = $_REQUEST['first__dept__score'];
    $bqp_b = $_REQUEST['first__dept__score_1'];
    $bqp_c = $_REQUEST['first__dept__score_2'];
    $bqp_d = $_REQUEST['first__dept__score_3'];
    // end column 1 score
    // column 2 score
    $bqp_a_1 = $_REQUEST['second__dept__score'];
    $bqp_b_2 = $_REQUEST['second__dept__score_1'];
    $bqp_c_3 = $_REQUEST['second__dept__score_2'];
    $bqp_d_4 = $_REQUEST['second__dept__score_3'];
    // end column 2 score
    // column 3 score
    $bqp_a_5 = $_REQUEST['third__dept__score'];
    $bqp_b_6 = $_REQUEST['third__dept__score_1'];
    $bqp_c_7 = $_REQUEST['third__dept__score_2'];
    $bqp_d_8 = $_REQUEST['third__dept__score_3'];
    // end column 3 score
    // column 4 score
    $bqp_a_9 = $_REQUEST['fourth__dept__score'];
    $bqp_b_10 = $_REQUEST['fourth__dept__score_1'];
    $bqp_c_11 = $_REQUEST['fourth__dept__score_2'];
    $bqp_d_12 = $_REQUEST['fourth__dept__score_3'];
    // end column 4 score
    // sum
    $sum_col_1 = $_REQUEST['first__dept__total'];
    $sum_col_2 = $_REQUEST['second__dept__total'];
    $sum_col_3 = $_REQUEST['third__dept__total'];
    $sum_col_4 = $_REQUEST['fourth__dept__total'];
    // end sum

    $judge__name = $_REQUEST['judge'];
    $get__judge__arrangement = "SELECT * FROM login__data WHERE `name` = '$judge__name'";
    $result = mysqli_query($conn, $get__judge__arrangement);
    $names = mysqli_fetch_array($result);
    $judge = $names['name'];
    $judge_uid = $names['id'];
    // first judge
    if ($judge__name == $judge && $judge_uid == '1') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores_3 SET 
        `Department` = '$dept_1', 
        `Total Score` = '$sum_col_1', 
        `Criteria A` = '$bqp_a', 
        `Criteria B` = '$bqp_b',
        `Criteria C` = '$bqp_c',
        `Criteria D` = '$bqp_d',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores_3 SET 
        `Department` = '$dept_2', 
        `Total Score` = '$sum_col_2', 
        `Criteria A` = '$bqp_a_1', 
        `Criteria B` = '$bqp_b_2',
        `Criteria C` = '$bqp_c_3',
        `Criteria D` = '$bqp_d_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores_3 SET 
        `Department` = '$dept_3', 
        `Total Score` = '$sum_col_3', 
        `Criteria A` = '$bqp_a_5', 
        `Criteria B` = '$bqp_b_6',
        `Criteria C` = '$bqp_c_7',
        `Criteria D` = '$bqp_d_8',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores_3 SET 
        `Department` = '$dept_4', 
        `Total Score` = '$sum_col_4', 
        `Criteria A` = '$bqp_a_9', 
        `Criteria B` = '$bqp_b_10',
        `Criteria C` = '$bqp_c_11',
        `Criteria D` = '$bqp_d_12',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    }
    // second judge
    else if ($judge__name == $judge && $judge_uid == '2') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores_4 SET 
        `Department` = '$dept_1', 
        `Total Score` = '$sum_col_1', 
        `Criteria A` = '$bqp_a', 
        `Criteria B` = '$bqp_b',
        `Criteria C` = '$bqp_c',
        `Criteria D` = '$bqp_d',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores_4 SET 
        `Department` = '$dept_2', 
        `Total Score` = '$sum_col_2', 
        `Criteria A` = '$bqp_a_1', 
        `Criteria B` = '$bqp_b_2',
        `Criteria C` = '$bqp_c_3',
        `Criteria D` = '$bqp_d_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores_4 SET 
        `Department` = '$dept_3', 
        `Total Score` = '$sum_col_3', 
        `Criteria A` = '$bqp_a_5', 
        `Criteria B` = '$bqp_b_6',
        `Criteria C` = '$bqp_c_7',
        `Criteria D` = '$bqp_d_8',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores_4 SET 
        `Department` = '$dept_4', 
        `Total Score` = '$sum_col_4', 
        `Criteria A` = '$bqp_a_9', 
        `Criteria B` = '$bqp_b_10',
        `Criteria C` = '$bqp_c_11',
        `Criteria D` = '$bqp_d_12',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    } else if ($judge__name == $judge && $judge_uid == '3') {
        // insert first department
        $insert__first__dept = "UPDATE raw_scores_5 SET 
        `Department` = '$dept_1', 
        `Total Score` = '$sum_col_1', 
        `Criteria A` = '$bqp_a', 
        `Criteria B` = '$bqp_b',
        `Criteria C` = '$bqp_c',
        `Criteria D` = '$bqp_d',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '1'";
        mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert second department
        $insert__second__dept = "UPDATE raw_scores_5 SET 
        `Department` = '$dept_2', 
        `Total Score` = '$sum_col_2', 
        `Criteria A` = '$bqp_a_1', 
        `Criteria B` = '$bqp_b_2',
        `Criteria C` = '$bqp_c_3',
        `Criteria D` = '$bqp_d_4',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '2'";
        mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
        // end insert second department

        // insert first department
        $insert__third__dept = "UPDATE raw_scores_5 SET 
        `Department` = '$dept_3', 
        `Total Score` = '$sum_col_3', 
        `Criteria A` = '$bqp_a_5', 
        `Criteria B` = '$bqp_b_6',
        `Criteria C` = '$bqp_c_7',
        `Criteria D` = '$bqp_d_8',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '3'";
        mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
        // end insert first department

        // insert first department
        $insert__fourth__dept = "UPDATE raw_scores_5 SET 
        `Department` = '$dept_4', 
        `Total Score` = '$sum_col_4', 
        `Criteria A` = '$bqp_a_9', 
        `Criteria B` = '$bqp_b_10',
        `Criteria C` = '$bqp_c_11',
        `Criteria D` = '$bqp_d_12',
        `Judge Name` = '$judge__name',
        `Date` = NOW() WHERE id = '4'";
        mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
        // end insert first department
    }

    echo
    '<script type="text/JavaScript">
        alert("Save Success");
            window.location.href = "scoresheet__2.php";
    </script>
    ';
}



// end for scoring scoresheet2
// final scores
if (isset($_REQUEST['save__final__button'])) {
    $final__score_1 = $_REQUEST['final_score_1'];
    $final__score_2 = $_REQUEST['final_score_2'];
    $final__score_3 = $_REQUEST['final_score_3'];
    $final__score_4 = $_REQUEST['final_score_4'];

    $deduction__value_1 = $_REQUEST['deduction_value_1'];
    $deduction__value_2 = $_REQUEST['deduction_value_2'];
    $deduction__value_3 = $_REQUEST['deduction_value_3'];
    $deduction__value_4 = $_REQUEST['deduction_value_4'];

    $first = $_REQUEST['first__dept'];
    $sec = $_REQUEST['sec__dept'];
    $third = $_REQUEST['third__dept'];
    $fourth = $_REQUEST['fourth__dept'];

    $first__total  = $_REQUEST['first_total'];
    $second__total  = $_REQUEST['second_total'];
    $third__total  = $_REQUEST['third_total'];
    $fourth__total  = $_REQUEST['fourth_total'];

    $insert__1 = "UPDATE final_scores SET `Department` = '$first', `Final Score` = '$final__score_1', `Deduction` = '$deduction__value_1'
        , `Total Score` = '$first__total', `Date` = NOW() WHERE `Department` = '$first' ";
    mysqli_query($conn, $insert__1);


    $insert__2 = "UPDATE final_scores SET `Department` = '$sec', `Final Score` = '$final__score_2', `Deduction` = '$deduction__value_2', `Total Score` = '$second__total', `Date` = NOW() WHERE `Department` = '$sec' ";
    mysqli_query($conn, $insert__2);

    $insert__3 = "UPDATE final_scores SET `Department` = '$third', `Final Score` = '$final__score_3', `Deduction` = '$deduction__value_3' , `Total Score` = '$third__total', `Date` = NOW() WHERE `Department` = '$third' ";
    mysqli_query($conn, $insert__3);

    $insert__4 = "UPDATE final_scores SET `Department` = '$fourth', `Final Score` = '$final__score_4', `Deduction` = '$deduction__value_4' , `Total Score` = '$fourth__total', `Date` = NOW()  WHERE `Department` = '$fourth'";
    mysqli_query($conn, $insert__4);

    echo
    '<script type="text/JavaScript">
        alert("Save Success");
            window.location.href = "overall__scoresheet.php";
    </script>
    ';
}

if (isset($_REQUEST['reset__button'])) {

    $insert__1 = "UPDATE final_scores SET  `Final Score` = '0', `Deduction` = '0', `Total Score` = '0' WHERE id = '1' ";
    mysqli_query($conn, $insert__1);

    $insert__2 = "UPDATE final_scores SET  `Final Score` = '0', `Deduction` = '0', `Total Score` = '0' WHERE id = '2' ";
    mysqli_query($conn, $insert__2);

    $insert__3 = "UPDATE final_scores SET  `Final Score` = '0', `Deduction` = '0' , `Total Score` = '0' WHERE id = '3' ";
    mysqli_query($conn, $insert__3);

    $insert__4 = "UPDATE final_scores SET  `Final Score` = '0', `Deduction` = '0' , `Total Score` = '0'  WHERE id = '4'";
    mysqli_query($conn, $insert__4);

    // insert first department
    $insert__first__dept = "UPDATE raw_scores SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores SET 
    `Total Score` = '0', 
    `Criteria A` = '0', 
    `Criteria B` = '0',
    `Criteria C` = '0' WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // end insert first department



    // insert first department
    $insert__first__dept = "UPDATE raw_scores_1 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores_1 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores_1 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores_1 SET 
    `Total Score` = '0', 
    `Criteria A` = '0', 
    `Criteria B` = '0',
    `Criteria C` = '0' WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // end insert first department



    // insert first department
    $insert__first__dept = "UPDATE raw_scores_2 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores_2 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores_2 SET 

        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0' WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores_2 SET 
    `Total Score` = '0', 
    `Criteria A` = '0', 
    `Criteria B` = '0',
    `Criteria C` = '0' WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // 

    echo
    '<script type="text/JavaScript">
        alert("Reset Success");
            window.location.href = "overall__scoresheet.php";
    </script>
    ';
}
if (isset($_REQUEST['save__final__button_1'])) {
    $final__score_1 = $_REQUEST['final_score_1'];
    $final__score_2 = $_REQUEST['final_score_2'];
    $final__score_3 = $_REQUEST['final_score_3'];
    $final__score_4 = $_REQUEST['final_score_4'];

    $deduction__value_1 = $_REQUEST['deduction_value_1'];
    $deduction__value_2 = $_REQUEST['deduction_value_2'];
    $deduction__value_3 = $_REQUEST['deduction_value_3'];
    $deduction__value_4 = $_REQUEST['deduction_value_4'];

    $first = $_REQUEST['first__dept'];
    $sec = $_REQUEST['sec__dept'];
    $third = $_REQUEST['third__dept'];
    $fourth = $_REQUEST['fourth__dept'];

    $first__total  = $_REQUEST['first_total'];
    $second__total  = $_REQUEST['second_total'];
    $third__total  = $_REQUEST['third_total'];
    $fourth__total  = $_REQUEST['fourth_total'];


    $insert__1 = "UPDATE final_scores_1 SET `Department` = '$first', `Final Score` = '$final__score_1', `Deduction` = '$deduction__value_1'
    , `Total Score` = '$first__total', `Date` = NOW() WHERE `Department` = '$first' ";
    mysqli_query($conn, $insert__1);

    $insert__2 = "UPDATE final_scores_1 SET `Department` = '$sec', `Final Score` = '$final__score_2', `Deduction` = '$deduction__value_2', `Total Score` = '$second__total', `Date` = NOW() WHERE `Department` = '$sec' ";
    mysqli_query($conn, $insert__2);

    $insert__3 = "UPDATE final_scores_1 SET `Department` = '$third', `Final Score` = '$final__score_3', `Deduction` = '$deduction__value_3' , `Total Score` = '$third__total', `Date` = NOW() WHERE `Department` = '$third' ";
    mysqli_query($conn, $insert__3);

    $insert__4 = "UPDATE final_scores_1 SET `department` = '$fourth', `Final Score` = '$final__score_4', `Deduction` = '$deduction__value_4' , `Total Score` = '$fourth__total', `Date` = NOW() WHERE `Department` = '$fourth'";
    mysqli_query($conn, $insert__4);

    echo
    '<script type="text/JavaScript">
        alert("Save Success");
            window.location.href = "overall__scoresheet_1.php";
    </script>
    ';
}

if (isset($_REQUEST['reset__button_1'])) {

    $insert__1 = "UPDATE final_scores_1 SET  `Final Score` = '0', `Deduction` = '0', `Total Score` = '0' WHERE id = '1' ";
    mysqli_query($conn, $insert__1);

    $insert__2 = "UPDATE final_scores_1 SET  `Final Score` = '0', `Deduction` = '0', `Total Score` = '0' WHERE id = '2' ";
    mysqli_query($conn, $insert__2);

    $insert__3 = "UPDATE final_scores_1 SET  `Final Score` = '0', `Deduction` = '0' , `Total Score` = '0' WHERE id = '3' ";
    mysqli_query($conn, $insert__3);

    $insert__4 = "UPDATE final_scores_1 SET  `Final Score` = '0', `Deduction` = '0' , `Total Score` = '0'  WHERE id = '4'";
    mysqli_query($conn, $insert__4);

    // first judge

    // insert first department
    $insert__first__dept = "UPDATE raw_scores_3 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores_3 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0'WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores_3 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores_3 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // second judge

    // insert first department
    $insert__first__dept = "UPDATE raw_scores_4 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores_4 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores_4 SET  
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores_4 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // end insert first department



    // insert first department
    $insert__first__dept = "UPDATE raw_scores_5 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0' WHERE id = '1'";
    mysqli_query($conn, $insert__first__dept) or die("Query Failed! SQL: $insert__first__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert second department
    $insert__second__dept = "UPDATE raw_scores_5 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0'
         WHERE id = '2'";
    mysqli_query($conn, $insert__second__dept) or die("Query Failed! SQL: $insert__second__dept - Error: " . mysqli_error($conn));
    // end insert second department

    // insert first department
    $insert__third__dept = "UPDATE raw_scores_5 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0'
         WHERE id = '3'";
    mysqli_query($conn, $insert__third__dept) or die("Query Failed! SQL: $insert__third__dept - Error: " . mysqli_error($conn));
    // end insert first department

    // insert first department
    $insert__fourth__dept = "UPDATE raw_scores_5 SET 
        `Total Score` = '0', 
        `Criteria A` = '0', 
        `Criteria B` = '0',
        `Criteria C` = '0',
        `Criteria D` = '0'
        WHERE id = '4'";
    mysqli_query($conn, $insert__fourth__dept) or die("Query Failed! SQL: $insert__fourth__dept - Error: " . mysqli_error($conn));
    // end insert first department
    echo
    '<script type="text/JavaScript">
        alert("Reset Success");
            window.location.href = "overall__scoresheet_1.php";
    </script>
    ';
}
// end final scores

// advanced deductions
// for ($i = 0; $i <= 4; $i++) {
//     $get_final_score = "SELECT * FROM final_scores WHERE id = $i";
//     $result = mysqli_query($conn, $get_final_score);
//     $rows = mysqli_fetch_array($result);

//     if ($rows['Deduction'] != 0) {
//         $final_score_of_departments = $rows['Total Score'] - $rows['Deduction'];

//         $insert_final_score = "UPDATE final_scores SET `` =,  WHERE id = $i";
//         mysqli_query
//         echo $final_score_of_departments;
//         echo "<br>";
//     } else {
//         $final_score_of_departments = $rows['Total Score'] - 100;
//         echo $final_score_of_departments;
//         echo "<br>";
//     }
// }
