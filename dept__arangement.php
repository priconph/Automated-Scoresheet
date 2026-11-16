<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="image/logo_1.png">

    <title>Arrangement</title>
    <style>
        h5
        {
            color: darkblue;
        }
        #h5_1
        {
            color: darkblue;
        }
        #logo_holder
        {
            margin-top: 2%;
        }
        .container
        {
            margin-top: 1%;
        }
    </style>
  </head>
  <body>
  
        <?php 
            include_once 'process.php';
        ?>
<div class="container w-50">
    <div class="row">
        <div class="col-lg-12 border border-dark">
        <h5 class="d-flex justify-content-center mt-2">Score Sheet arrangement for (BEST ANALYSIS AND CORRECTIVE ACTION)</h5>

<div class="w-100 d-flex justify-content-center" id="conts">
    <form method="POST">
        <!-- first dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '1'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">First Department</span>
            
            <select class="form-select mt-2 w-75" name="first__department">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
            
        </div>
      
        <?php
            }
        ?>
        <!-- end first dept -->

        <!-- second dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '2'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Second Department</span>
            <select class="form-select mt-2 w-75" name="second__department">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>

        <?php
            }
        ?>
        <!-- end second dept -->

        <!-- third dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '3'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

       
        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Third Department</span>
            <select class="form-select mt-2 w-75" name="third__department">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
        <!-- end third dept -->

        <!-- fourth dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '4'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Fourth Department</span>
            <select class="form-select mt-2 w-75" name="fourth__department">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
<br>

<!--  -->
<h5 id="h5_1">Score Sheet arrangement for (BEST QUALITY PROJECT)</h5>
<div class="w-100" id="conts_1">
    <form>
        <!-- first dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '1'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">First Department</span>
            <select class="form-select mt-2 w-75" name="first__department_1">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
        <!-- end first dept -->

        <!-- second dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '2'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Second Department</span>
            <select class="form-select mt-2 w-75" name="second__department_1">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
        <!-- end second dept -->

        <!-- third dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '3'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

       
        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Third Department</span>
            <select class="form-select mt-2 w-75" name="third__department_1">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
        <!-- end third dept -->

        <!-- fourth dept -->
        <?php 
            $get__dept = "SELECT * FROM arrangement WHERE id = '4'";
            $do__get__dept = mysqli_query($conn, $get__dept);
            while($display__dept = mysqli_fetch_array($do__get__dept))
            {
                $dept__id = $display__dept['id']; 
                $dept = $display__dept['department'];
        ?>

        <div class="input-group mb-3 w-100 d-flex mt-2 flex-nowrap">
            <span class="input-group-text w-50 mt-2" id="basic-addon1">Fourth Department</span>
            <select class="form-select mt-2 w-75" name="fourth__department_1">
                <option selected>Choose Department</option>
                <option value="CN">CN</option>
                <option value="YF">YF</option>
                <option value="TS">TS</option>
                <option value="PPS">PPS</option>
            </select>
        </div>
        <?php
            }
        ?>
    <div class="d-flex flex-wrap justify-content-end">
        <div class="mt-2 p-2">
            <button type="submit" class="btn btn-success mt-2 mb-2" name="update__button" id="update__button">
                Update
            </button>
        </div>
        <div class="mt-2 p-2">
            <a href="organizer__menu.php" class="btn btn-secondary mt-2 mb-2" id="menu__button">Back to Menu</a>
        </div>
   
    </div>
    </form>
        <!-- end fourth dept -->
</div>
</div>
</div>
</div>
<div class="row w-100">
        <div class="col-lg-4 offset-lg-4 d-flex justify-content-center mb-2" id="logo_holder">
            <img src="image/logo_1.png" width="80%" height="100%" >
        </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>