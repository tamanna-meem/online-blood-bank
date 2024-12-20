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
<!-- admin home page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">

    <link rel="stylesheet" href="css/home.css">

    <style>
        .label {
            color: white;
            padding: 8px;
        }

        .success {
            background-color: #4CAF50;
        }

        /* Green */
        .info {
            background-color: #2196F3;
        }

        /* Blue */
        .warning {
            background-color: #ff9800;
        }

        /* Orange */
        .danger {
            background-color: #f44336;
        }

        /* Red */
        .other {
            background-color: #e7e7e7;
            color: black;
        }

        /* Gray */
    </style>

</head>

<body>

    <?php

    include 'database.php';

    $id = $_SESSION['adminid'];

    $sql = "SELECT * FROM blood_stock";
    $result = mysqli_query($con, $sql);





    ?>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
        <a style="color:white;" class="navbar-brand" href="index.php"><i class="fab fa-gratipay"></i>&nbsp;<font face="Comic sans MS" size="4">Blood Bank Application for IU</font></a>


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
                <!--             <li><a style="text-decoration:none;" href="admin_donation_request.php"><i class="fas fa-hand-holding-medical"></i>Donation Request</a></li>
            <li><a style="text-decoration:none;" href="admin_blood_request.php"><i class="fas fa-history"></i>Blood Request</a></li> -->
                <li><a style="text-decoration:none;" href="users.php"> <i class="fas fa-user"></i>Users</a></li>

            </ul>

        </div>
        <div class="main_content">

            <br><br>
            <div class="container">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $blood[$row['blood_type']] = $row['unit'];
                }
                ?>


                <div class="row">
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>A+ <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['A+']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>B+ <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['B+']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>O+ <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['O+']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>AB+ <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['AB+']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>A- <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!--  <?php echo $blood['A-']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>B- <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['B-']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>O- <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!--  <?php echo $blood['O-']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <h2>AB- <i class="fas fa-tint"></i></h2>
                                </div><br><br>
                                <div>
                                    <!-- <?php echo $blood['AB-']; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <?php

                $users = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as total FROM user"));
                $pendingsql = "SELECT COUNT(*) as pending FROM ( SELECT * FROM blood_request UNION SELECT * FROM blood_donation ) AS t WHERE status = 'pending'";
                $pending = mysqli_fetch_array(mysqli_query($con, $pendingsql));
                $approvedsql = "SELECT COUNT(*) as approved FROM ( SELECT * FROM blood_request UNION SELECT * FROM blood_donation ) AS t WHERE status = 'approved' AND admin_id = '" . $_SESSION['adminid'] . "'";
                $approved = mysqli_fetch_array(mysqli_query($con, $approvedsql));
                $blood_count = mysqli_fetch_array(mysqli_query($con, "SELECT SUM(unit) AS count FROM blood_stock"));

                ?>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <i class="fas fa-users"></i>
                                </div><br>
                                <div>
                                    Total Users <br>
                                    <?php echo $users['total']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="blood">
                                    <i class="fas fa-tint xyz"></i>
                                </div><br>
                                <div>
                                    Total Blood Unit <br>
                                    <?php echo $blood_count['count']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php
            include 'scripts.php';
            ?>

</body>

</html>