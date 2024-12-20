<?php
session_start();
$user_id = $_SESSION['userid'];

if (!isset($user_id)) {
    header('location:signin.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}
?>
<!-- user details for admin -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/home.css">

    <style>
        #dash {
            font-size: 40px;
            font-weight: 600;
            background-image: repeating-linear-gradient(to right, #553c9a, #ee4b2b 10%, #553c9a 20%);
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
        }
        .footer {
            position: bottom;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: none;
            color: black;
            text-align: center;
            padding: 5px 0px 5px 0px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
        <a style="color:white;" class="navbar-brand" href="index.php"><i class="fab fa-gratipay"></i>&nbsp;<font face="Comic sans MS" size="4">Blood Bank Application for IU
</font></a>


        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="/logout">Logout &nbsp; <i class="fas fa-sign-out-alt"></i></a>
                </li>

            </ul>
        </div>
    </nav>
    <br><br>
    <div class="wrapper">
        <div class="sidebar">

            <ul>
                <li><a style="text-decoration:none;" href="admin.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a style="text-decoration:none;" href="users.php"> <i class="fas fa-user"></i>Users</a></li>

            </ul>

        </div>
        <?php
        # retrieving the user details which the admin clicked.
        include 'database.php';

        $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user WHERE userid = '" . $_POST['userid'] . "'"));
        ?>
        <div class="main_content">
            <br><br>
            <div class="container">
                <H4 id="dash" class="text-center"><?php echo $row['first_name'] . " " . $row['last_name']; ?> Details</H4><br>



                <div class="info">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">User ID</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['userid']; //user id
                                        //exit;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">User Name</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['username']; //user id
                                        //exit;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Full Name</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['first_name'] . " " . $row['last_name'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Email</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['email'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Mobile Number</h5>
                                    <p class="card-text text-dark">
                                        <?php

                                        echo $row['phone_number'];

                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Gender</h5>
                                    <p class="card-text text-dark">
                                        <?php

                                        echo $row['gender'];;

                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Blood Type</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['blood_type'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Age</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['age'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Department</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['dept'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Session</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['sesion'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary font-weight-bold text-primary">District</h5>
                                    <p class="card-text text-dark text-dark">
                                        <?php
                                        echo $row['district'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-primary">Birthdate</h5>
                                    <p class="card-text text-dark">
                                        <?php
                                        echo $row['birth_date'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-primary">Last Donation</h5>
                            <p class="card-text text-dark">
                                <?php
                                echo $row['last_donation'];
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php

                if (isset($_POST['remove'])) {

                    #to remove the user admin specified.

                    $sql = "DELETE FROM user WHERE userid = '" . $_POST['id'] . "'";

                    if ($con->query($sql) == TRUE) {

                        header("location: users.php");
                    } else {
                        echo "error";
                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' style = 'text-align: center;'>
                             <strong> Error updating record: " . $con->error . "</strong> <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                             </div>";
                    }
                }
                ?>




                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form method='post'>
                            <br><br>
                            <input type='submit' name='remove' value='Remove User' class='btn btn-danger badge-pill'>
                            <?php echo "<input type = 'hidden' name = 'id' value = " . $row['userid'] . " >"; ?>
                        </form>
                    </div>
                </div>
    <?php
    require 'footer.php';
    ?>
            </div>
        </div>
    </div>
</body>

</html>