<?php
// CHECK TOTAL SCORE IF 0 ON OVERALL SCORESHEET BACA BUTTON CLICK
if (isset($_REQUEST['baca_button'])) {
    $check_total_score = "SELECT * FROM final_scores WHERE id = 1";
    $check_result = mysqli_query($conn, $check_total_score);

    $rows = mysqli_fetch_array($check_result);
    $first_department = $rows['Department'];
    $first_department_total_score = $rows['Total Score'];
    $first_department_deduction = $rows['Deduction'];
    $first_department_final_score = $rows['Final Score'];


    if ($rows['Total Score'] != 0) {
        $set_deduction = "UPDATE final_scores SET `Department` = '$first_department', `Final Score` = '$first_department_final_score', `Deduction` = '$first_department_deduction'
        , `Total Score` = '$first_department_total_score' WHERE `Department` = '$first_department' ";
        mysqli_query($conn, $set_deduction);
    }
}
