<?php include('database.php'); ?>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">


                    <?php

                    if (isset($_POST['submit'])) {
                        //echo "ok"; exit;
                        $id = $_REQUEST['userid'];

                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];

                        $sql = "UPDATE `user` SET `first_name`='$first_name',`last_name`='$last_name' WHERE userid='$id'";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {

                            echo "<div class='alert alert-success'>";
                            echo "<strong>Success!</strong>Successfully Updated";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "<strong>Error!</strong> in update.Please try again.";
                            echo "</div>";
                        }
                    }


                    ?>
                    <center>
                        <h3>Update User</h3>
                    </center>

                    <?php
                    $id = $_REQUEST['userid'];
                    $sql1 = "SELECT * FROM user WHERE userid='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    //var_dump($result1);
                    while ($row = mysqli_fetch_array($result1)) {

                    ?>

                        <form action="course_update.php" method="post" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="course_code" class="col-sm-2 control-label">Course Code</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="first_name" value="<?= $row['first_name']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="course_name" class="col-sm-2 control-label">Course Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="last_name" value="<?= $row['last_name']; ?>">
                                </div>
                            </div>



                            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
                            <input type="hidden" name="id" value="<?= $id; ?>" />
                        </form>
                        <br>
                        <a href="course_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>