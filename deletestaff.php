<?php 

    require_once("connection.php");

if(isset($_GET['Del']))
         {
             $namaStaff = $_GET['Del'];
             $query = " delete from staff where namaStaff='".$namaStaff."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:staffrecord.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:staffrecord.php");
         }

         
?>