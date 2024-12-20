<?php
#php file for checking the login credentials for the user
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        include 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);

        //if($row['username'] == $username && password_verify($password, $row['password'])) //for hash pass
        if($row['username'] == $username && $row['password'] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone_number'] = $row['phone_number'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['age']=$row['age'];
            $_SESSION['blood_type'] = $row['blood_type'];
            $_SESSION['dept'] = $row['dept'];
            $_SESSION['sesion'] = $row['sesion'];
            $_SESSION['district'] = $row['district'];
            $_SESSION['birth_date'] = $row['birth_date'];
            $_SESSION['last_donation'] = $row['last_donation'];


            header("location: home.php");
        }
        else {

            $_SESSION['error'] = "Invalid Credentials";
            header("location: index.php");
        }

    }

    ?>
