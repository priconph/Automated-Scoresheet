<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">
    
    <title>Ranking</title>
    <style>
        h1
        {
            color: white;
            font-weight: bold;
        }
        h2
        
        {
            color: white;
            font-weight: bold;    
        }
        #h1_1
        {
            color: gray;
            font-weight: bold;
        }
        #h4_1
        {
            color: black;
            font-weight: bold;    
        }
        label
        {
            font-family: Garamond, serif;
            font-weight: bold;
            font-size: xx-large;
        }
      
        #logo_holder
        {
            margin-top: 1%;
        }
        .container
        {
            margin-top: 7%;
        }
      
    </style>
  </head>
  <body>
  
    <div class="container w-100">
        <div class="row">
            <div class="col-lg-12 border border-dark mt-2">
                <h1 class="text-center" id="h1_1">
                    RANKING
                </h1>
            
            <div class="col-lg-2 offset-lg-11 mb-1">
                <a href="organizer__menu.php" class="btn btn-secondary">Exit</a>
            </div>

        <div class="d-flex flex-row ">

       
            
            <div class="col-lg-12">
                <h2 class="w-100 text-center" style="background-color: #2565AE;">
                    BEST QUALITY PROJECT
                </h2>
            <div class="col-lg-12 offset-lg-4 mb-5">
                <div class="d-flex flex-row" >

                <div class="justify-content-start d-flex">
                    <ul class="list-unstyled mr-2">
                 <li> <label class="mt-2" style="font-weight: bold">1</label></li>
                 <li><label class="mt-2" style="font-weight: bold">2</label></li>
                 <li><label class="mt-2" style="font-weight: bold">3</label></li>
                 <li> <label class="mt-2" style="font-weight: bold">4</label></li>
                    </ul>
                   
                    
                </div>
                <div class="text-center ml-5">
                <table class="table table-hover table-sm table-responsive">
              
<?php
$get__scores_1 = "SELECT * FROM final_scores_1 WHERE id = '1'";
$result = mysqli_query($conn, $get__scores_1);
$row = mysqli_fetch_array($result);
$dept = $row['Department'];
$f_score = $row['Final Score'];
// 
            $get__scores_2 = "SELECT * FROM final_scores_1 WHERE id = '2'";
            $result_2 = mysqli_query($conn, $get__scores_2);
            $row_2 = mysqli_fetch_array($result_2);

            $dept_2 = $row_2['Department'];
            $f_score_2 = $row_2['Final Score'];
// 
$get__scores_3 = "SELECT * FROM final_scores_1 WHERE id = '3'";
$result_3 = mysqli_query($conn, $get__scores_3);
$row_3 = mysqli_fetch_array($result_3);
$dept_3 = $row_3['Department'];
$f_score_3 = $row_3['Final Score'];
// 
            $get__scores_4 = "SELECT * FROM final_scores_1 WHERE id = '4'";
            $result_4 = mysqli_query($conn, $get__scores_4);
            $row_4 = mysqli_fetch_array($result_4);
            $dept_4 = $row_4['Department'];
            $f_score_4 = $row_4['Final Score'];
// 
// select highest
$select__highest = "SELECT MAX(`Final Score`) as maxScore FROM final_scores_1";
$res = mysqli_query($conn, $select__highest) or die("Query Failed! SQL: $select__highest - Error: ".mysqli_error($conn));
$sel =  mysqli_fetch_array($res);
$f_score_f =  $sel['maxScore'];
// end select highest

$select__second = "SELECT MAX(`Final Score`) as maxSecond
  FROM final_scores_1
 WHERE `Final Score` < '$f_score_f'";
    $query = mysqli_query($conn, $select__second) or die("Query Failed! SQL: $select__second - Error: ".mysqli_error($conn));
    $get = mysqli_fetch_array($query);

   $second_highest = $get['maxSecond'];



           
 if(($f_score == $f_score_f) && ($f_score_2 == $f_score_f) && ($f_score_3 == $f_score_f) && ($f_score_4 == $f_score_f))
{
    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;'>  
    <td><h1>$dept</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";

    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;' >
    <td><h1>$dept_2</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";

    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;'>  
    <td><h1>$dept_3</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";

    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;' >
    <td><h1>$dept_4</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";
}

else if(($f_score == $f_score_f) && ($f_score_2 == $f_score_f) && ($f_score_3 == $f_score_f))
{
    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;'>  
    <td><h1>$dept</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";

    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;' >
    <td><h1>$dept_2</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";

    echo "  
    <tbody id='highlight'>
    <tr style='background-color: green; color: white;'>  
    <td><h1>$dept_3</h1></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><h1>$f_score_f</h1></td>
    </tr>";
}

      
       else if(($f_score == $f_score_f) && ($f_score_2 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_2</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        else if(($f_score == $f_score_f) && ($f_score_3 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_3</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        else if(($f_score == $f_score_f) && ($f_score_4 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_4</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        
        else if(($f_score_2 == $f_score_f) && ($f_score_3 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept_2</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_3</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }

        else if(($f_score_2 == $f_score_f) && ($f_score_4 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept_2</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_4</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }

        else if(($f_score_3 == $f_score_f) && ($f_score_4 == $f_score_f))
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;'>  
            <td><h1>$dept_3</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";

            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green; color: white;' >
            <td><h1>$dept_4</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        else if($f_score == $f_score_f)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green;' >
            <td><h1>$dept</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        else if($f_score_2 == $f_score_f)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green;' >
            <td><h1>$dept_2</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }

        else if($f_score_3 == $f_score_f)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green;' >
            <td><h1>$dept_3</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }
        else if($f_score_4 == $f_score_f)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: green;' >
            <td><h1>$dept_4</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1>$f_score_f</h1></td>
            </tr>";
        }


        
      if($f_score == $second_highest)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: #ffff66; color: black;'>  
            <td><h1  style='color: black;'>$dept</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1  style='color: black;'>$second_highest</h1></td>
            </tr>";
    
        }
        else if($f_score_2 == $second_highest)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: #ffff66; color: black;'>  
            <td><h1  style='color: black;'>$dept_2</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1  style='color: black;'>$second_highest</h1></td>
            </tr>";
    
        }
        else if($f_score_3 == $second_highest)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: #ffff66; color: black;'>  
            <td><h1  style='color: black;'>$dept_3</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1  style='color: black;'>$second_highest</h1></td>
            </tr>";
    
        }
        else if($f_score_4 == $second_highest)
        {
            echo "  
            <tbody id='highlight'>
            <tr style='background-color: #ffff66; color: black;'>  
            <td><h1 style='color: black;'>$dept_4</h1></td>
            <td></td>
            <td><label>--</label></td>
            <td><label>--</label></td>
            <td></td>
            <td></td>
            <td><h1 style='color: black;'>$second_highest</h1></td>
            </tr>";
    
        }
      
      
      
       
        
        $get__next = "SELECT `Department`, `Final Score` FROM final_scores_1 WHERE (`Final Score` < '$f_score_f') AND (`Final Score` < '$second_highest') ORDER BY `Final Score` DESC";
         $do__query = mysqli_query($conn, $get__next);
         
         while($display = mysqli_fetch_array($do__query))
         {
            $department = $display['Department'];
          
            $score = $display['Final Score'];

?>      

                  <tr> <td><h1 style="color: black;"><?php echo $department; ?></h1></td>
                    <td></td>
                    <td><label>--</label></td>
                    <td><label>--</label></td>
                    <td></td>
                    <td></td>
                    <td><h1 style="color: black;"><?php echo $score; ?></h1></td>
                    </tr>  
        <?php
         }
        
        ?>      
                   </tbody>
                </table>
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
            <img src="image/logo_1.png" width="40%" height="100%" >
        </div>
        <script src="bootstrap/bootstrap.bundle.min.js"></script>
      
  </body>
</html>