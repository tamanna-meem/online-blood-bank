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
<!-- home page of the user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('link.php');
    ?>

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
    <?php
    include('login.php');
    include('nav.php');
    ?>

    <div class="wrapper">
        <?php
        include('sidebar.php');
        ?>
        <div class="main_content">

            <!-- displaying all user details -->

            <div class="header">
                <h3 id="dash" class="text-center"> <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?> Dashboard</h3>
            </div>

            <div class="info">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-primary">User ID</h5>
                                <p class="card-text text-dark">
                                    <?php
                                    echo $_SESSION['userid']; //user id
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
                                    echo $_SESSION['username']; //user id
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
                                    echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
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
                                    echo $_SESSION['email'];
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

                                    echo $_SESSION['phone_number'];

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

                                    $gen = $row['gender'];
                                    if ($gen == "m") echo "Male";
                                    else echo "Female";

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
                                    echo $_SESSION['blood_type'];
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
                                    echo $_SESSION['age'];
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
                                    echo $_SESSION['dept'];
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
                                    echo $_SESSION['sesion'];
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
                                    echo $_SESSION['district'];
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
                                    echo $_SESSION['birth_date'];
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
                            echo $_SESSION['last_donation'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            include('footer.php');
            ?>
        </div>
    </div>

    <?php
    include('scripts.php');
    ?>

</body>

</html>