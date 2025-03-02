<?php 

    require_once("connection.php");

if(isset($_GET['Del']))
         {
             $username = $_GET['Del'];
             $query = " delete from user where username='".$username."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:userrecord.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:userrecord.php");
         }

         
?>