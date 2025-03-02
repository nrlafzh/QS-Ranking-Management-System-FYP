<?php 

    require_once("connection.php");

    if(isset($_POST['update_user']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $icnumber = mysqli_real_escape_string($conn, $_POST['icnumber']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $PTJ = mysqli_real_escape_string($conn, $_POST['PTJ']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $accessID = mysqli_real_escape_string($conn, $_POST['accessID']);

    $query = "UPDATE user 
    SET fullname='$fullname', 
    icnumber='$icnumber', 
    phonenumber='$phonenumber', 
    email='$email',
    PTJ='$PTJ', 
    username='$username', 
    password='$password', 
    accessID='$accessID' 
    WHERE username='$username' ";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: userrecord.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: userrecord.php");
        exit(0);
    }

}

?>