<?php

    require_once("connection.php");

    
        if(empty($_POST['fullname']) || empty($_POST['icnumber']) || empty($_POST['phonenumber']) || empty($_POST['email']) || empty($_POST['PTJ']) || empty($_POST['username']) || empty($_POST['accessID']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $fullname = $_POST['fullname'];
            $icnumber = $_POST['icnumber'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $PTJ = $_POST['PTJ'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $accessID = $_POST['accessID'];

            $query = " insert into user (fullname, icnumber, phonenumber, email, PTJ, username, password, accessID) values('$fullname', '$icnumber', '$phonenumber', '$email', '$PTJ', '$username', '$password', '$accessID')";
            $result = mysqli_query($conn, $query);
           
            if($result)
            {
                header("location:userrecord.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }

?>