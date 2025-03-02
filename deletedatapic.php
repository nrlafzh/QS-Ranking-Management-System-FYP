<?php 

    require_once("connection.php");

if(isset($_GET['Del']))
         {
             $fullname = $_GET['Del'];
             $query = " delete from students where fullname='".$fullname."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:datarecord.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:datarecord.php");
         }

         
?>