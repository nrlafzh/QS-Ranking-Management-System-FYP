<?php 

    require_once("connection.php");

    if(isset($_POST['update_data']))
{
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "UPDATE students 
    SET fullname='$fullname', 
    email='$email', 
    phone='$phone', 
    course='$course'
    WHERE fullname='$fullname'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Updated Successfully";
        header("Location: datarecordds.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: datarecordds.php");
        exit(0);
    }

}

?>