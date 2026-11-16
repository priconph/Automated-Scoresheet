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
            color: gray;
            font-weight: bold;
        }
        h4
        {
            color: black;
            font-weight: bold;
            background-color: orange;  
            font-size: 30px;
        }
        #h4_1
        {
            color: black;
            font-weight: bold;    
            background-color: lightgreen;
        }
        label
        {
            font-family: Garamond, serif;
            font-weight: bold;
            font-size: 40px;
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
  
    <div class="container w-100 col-lg-10">
        <div class="row">
            <div class="col-lg-12 border border-dark mt-2">
                <h1 class="text-center">
                    RANKING
                </h1>
            
            <div class="col-lg-2 offset-lg-11 mb-1">
                <a href="user__menu.php" class="btn btn-secondary">Exit</a>
            </div>

        <div class="d-flex flex-row ">

       
            
            <div class="col-lg-6">
                <h4 class="w-100 text-center">
                    BEST ANALYSIS AND CORRECTIVE ACTION
                </h4>
            <div class="col-lg-10 offset-lg-2 mb-5">
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
                <tr>  
<?php


$get__scores_1 = "SELECT * FROM final_scores ORDER BY `Final Score` DESC";
    $result = mysqli_query($conn, $get__scores_1);
        while($row = mysqli_fetch_array($result))
        {
            $dept = $row['Department'];
            $f_score = $row['Final Score'];
?>      
                    <td><label><?php echo $dept;?></label></td>
                    <td></td>
                    <td><label>--</label></td>
                    <td><label>--</label></td>
                    <td></td>
                    <td></td>
                    <td><label><?php echo $f_score;?></label></td>
                    </tr>
        <?php
        }
        ?>      
                  
                  
                  
                </table>
                </div>
                </div>
            </div>
            
            </div>

            <div class="col-lg-6">
                <h4 class="w-100 text-center" id="h4_1">
                    BEST QUALITY PROJECT
                </h4>
            <div class="col-lg-10 offset-lg-2 mb-5">
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
<tr>  
<?php


$get__scores_1 = "SELECT * FROM final_scores_1 ORDER BY `Final Score` DESC";
$result = mysqli_query($conn, $get__scores_1);
while($row = mysqli_fetch_array($result))
{
$dept = $row['Department'];
$f_score = $row['Final Score'];
?>      
    <td><label><?php echo $dept;?></label></td>
    <td></td>
    <td><label>--</label></td>
    <td><label>--</label></td>
    <td></td>
    <td></td>
    <td><label><?php echo $f_score;?></label></td>
    </tr>
<?php
}
?>      
  
  
  
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
        </div>
        <script src="bootstrap/bootstrap.bundle.min.js"></script>

  </body>
</html>