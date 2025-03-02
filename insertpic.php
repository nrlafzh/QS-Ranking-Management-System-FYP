<?php

    require_once("connection.php");

            $fullname = $_POST['fullname'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $course = $_POST['course'];

            $query = " insert into students (fullname, email, phone, course) values('$fullname', '$email', '$phone', '$course')";
            $result = mysqli_query($conn, $query);
           
            if($result)
            {
                header("location:datarecord.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }

?>