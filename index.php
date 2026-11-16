<?php 
// include 'logout.php';
// if(!isset($_SESSION['category_user'])){
//     header('location:user__menu.php');
// }
// else
// {
//     header('location:organizer__menu.php');
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

    <link rel="icon" type="icon" href="image/logo_1.png">
    <title>Login</title>
    <style>
        .content
        {
            margin-left: 37%;
        }
        #logo_holder
        {
            margin-top: 5%;
        }
    </style>

<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    
  </head>
  <body>
        <div class="row w-100"> 
        <div class="col-lg-4 offset-lg-4 d-flex justify-content-center mb-5" id="logo_holder">
                <img src="image/logo_1.png" width="65%" height="100%" >
        </div>
        </div>

<div class="content w-25 col-lg-12" id="login__content">
    <div class="row">
        <div class="col-lg-12">
        <form method="POST">
        <?php include_once 'process.php';?>  
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Username</span>
        <input type="text" class="form-control" placeholder="Username" name="user__username" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Passsword</span>
        <input type="password" class="form-control" placeholder="Password" name="user__password" required>
    </div>

    <button style="float: right;" type="submit" class="btn btn-success" name="login__button" id="login__button">Login</button>
    </form>
        </div>
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