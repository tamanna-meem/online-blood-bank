<?php session_start(); ?>
<!-- inventory page for the user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('link.php');
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
        .btn {
            line-height: 35px;
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="wrapper">
        <?php
        require_once('sidebar.php');
        ?>
        <div class="main_content">
            <br><br>
            <div class="ml-4">Blood Group<span style="color:red">*</span></div>
            <div class="container">
                <form name="needblood" action="" method="post">
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <div><select name="blood_type" class="form-control" required>
                                    <option value="" selected disabled>Select</option>
                                    <?php
                                    require_once 'database.php';
                                    $sql = "select * from blood_stock";
                                    $result = mysqli_query($con, $sql) or die("query unsuccessful.");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value=" <?php echo $row['blood_type'] ?>"> <?php echo $row['blood_type'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div>
                                <input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer">
                            </div>
                        </div>
                    </div>
                    <h4 id="dash" class="text-center">Donor Details</h4><br>

                    <div class="row">
                        <?php if (isset($_POST['blood_type'])) {

                            $bt = $_POST['blood_type'];
                            $btr = str_replace(' ', '', $bt);


                            //$sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
                            $sql = "SELECT * FROM user WHERE blood_type = '{$btr}'";
                            $result = mysqli_query($con, $sql) or die("query unsuccessful.");

                            /* var_dump($row);
                            exit; */
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <p class="card-text text-dark">
                                                            <span class="text-primary font-weight-bold">
                                                                Name:
                                                            </span>
                                                            <?php
                                                            echo $row['first_name'] . " " . $row['last_name'];
                                                            ?>
                                                        </p>
                                                        <p>
                                                            <span class="text-primary font-weight-bold">
                                                                Phone:
                                                            </span>
                                                            <?php
                                                            echo $row['phone_number'];
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                        <?php
                                }
                            } else {

                                echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';
                            }
                        } ?>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <?php
    require_once('footer.php');
    require_once('scripts.php');
    ?>
</body>

</html>
