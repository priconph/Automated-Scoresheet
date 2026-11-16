<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update User</title>
    <style>
        .content {
            margin-top: 5%;
        }
    </style>
</head>

<body>

    <div class="content w-75 col-lg-12 offset-lg-1 d-flex justify-content-center">
        <div class="row w-50">
            <div class="col-lg-12 offset-lg-1 w-100 mt-5 mb-5 border border-dark">
                <form method="POST" class="mt-2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Role:</label>&nbsp;
                        <select class="form-select" aria-label="Default select example" name="category__">
                            <option selected>Select Role</option>
                            <option value="Judge">Judge</option>
                            <option value="Organizer">Organizer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Name</label>
                        <input type="text" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" style="text-transform: capitalize;" name="judgename__" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Judge Number</label>
                        <input type="number" min="0" max="3" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" style="text-transform: capitalize;" name="judgenumber__">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Username</label>
                        <input type="text" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" name="username__" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-weight: bold;">Password</label>
                        <input type="password" class="form-control w-100" id="exampleInputPassword1" name="password__" required>
                    </div>
                    <button type="submit" style="float: right;" class="btn btn-primary mb-3" name="submit__button">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once 'connection.php';
    if (isset($_REQUEST['submit__button'])) {
        $name__ = $_REQUEST['judgename__'];
        $number__ = $_REQUEST['judgenumber__'];
        $user__ = $_REQUEST['username__'];
        $password1__ = $_REQUEST['password__'];
        $category1__ = $_REQUEST['category__'];

        $name1__ = ucwords($name__);

        if ($number__ == '1' && $category1__ == 'Judge') {
            $update__db = "UPDATE login__data SET `name` = '$name1__', `username` = '$user__', `password` = '$password1__', `category` = 'Judge' WHERE id = '1' ";
            mysqli_query($conn, $update__db);
        } else if ($number__ == '2' && $category1__ == 'Judge') {
            $update__db = "UPDATE login__data SET `name` = '$name1__', `username` = '$user__', `password` = '$password1__', `category` = 'Judge' WHERE id = '2' ";
            mysqli_query($conn, $update__db);
        } else if ($number__ == '3' && $category1__ == 'Judge') {
            $update__db = "UPDATE login__data SET `name` = '$name1__', `username` = '$user__', `password` = '$password1__', `category` = 'Judge' WHERE id = '3' ";
            mysqli_query($conn, $update__db);
        } else {
            $update__db = "UPDATE login__data SET `name` = '$name1__', `username` = '$user__', `password` = '$password1__', `category` = 'Organizer' WHERE id = '4' ";
            mysqli_query($conn, $update__db);
        }

        echo
        '<script type="text/JavaScript">
                    alert("Add Success");
                        window.location.href = "addUser.php";
                </script>
                ';
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>