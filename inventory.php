<?php session_start(); ?>
<!-- inventory page for the user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('link.php');
    ?>

    <style>
        .footer {
            position: fixed;
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

            <br><br>
            <div class="container">
                <?php

                include 'database.php';

                #retrieving all the blood available in the blood stock

                $id = $_SESSION['adminid'];

                $sql = "SELECT * FROM blood_stock ";
                $result = mysqli_query($con, $sql);


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
                                    <!-- <?php echo $blood['A-']; ?> -->
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
                                   <!--  <?php echo $blood['B-']; ?> -->
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
                                   <!--  <?php echo $blood['AB-']; ?> -->
                                </div>
                            </div>
                        </div>
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