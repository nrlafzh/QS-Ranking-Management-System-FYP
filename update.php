<?php

if(isset($_POST['update']) && isset($_GET['edit'])){
   $picID = $_GET['edit'];
   $fullname = $_POST['fullname'];
   $icnumber = $_POST['icnumber'];
   $phonenumber = $_POST['phonenumber'];
   $email = $_POST['email'];
   $PTJ = $_POST['PTJ'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $accessID = $_POST['accessID'];

   $query   =  "UPDATE developers SET
                fullName='$fullName',
                gender  = '$gender',
                email   = '$email',
                mobile  = '$mobile',
                address = '$address',
                city    = '$city',
                state   = '$state'
                WHERE id = '$id'";
  
  $execute= $conn->query($query);

  if($execute== true){
      header("location:display-data.php");
  }else{
      echo  $conn->error;
  }
  echo  $conn->error;

}

?>