<?php 

    require_once("connection.php");

    if(isset($_POST['update_data']))
{
    $namaStaff = mysqli_real_escape_string($conn, $_POST['namaStaff']);

    $namaStaff = mysqli_real_escape_string($conn, $_POST['namaStaff']);
    $noStaff = mysqli_real_escape_string($conn, $_POST['noStaff']);
    $noKP = mysqli_real_escape_string($conn, $_POST['noKP']);
    $namaStaff = mysqli_real_escape_string($conn, $_POST['namaStaff']);
    $gelaran = mysqli_real_escape_string($conn, $_POST['gelaran']);
    $gred = mysqli_real_escape_string($conn, $_POST['gred']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $jantina = mysqli_real_escape_string($conn, $_POST['jantina']);
    $warganegara = mysqli_real_escape_string($conn, $_POST['warganegara']);
    $jawatan = mysqli_real_escape_string($conn, $_POST['jawatan']);
    $kelayakan = mysqli_real_escape_string($conn, $_POST['kelayakan']);
    $taraf = mysqli_real_escape_string($conn, $_POST['taraf']);
    $PTJ = mysqli_real_escape_string($conn, $_POST['PTJ']);

    $query = "UPDATE staff 
    SET noStaff = '$noStaff',
        noKP = '$noKP',
                                namaStaff = '$namaStaff',
                                gelaran = '$gelaran',
                                gred = '$gred',
                                status = '$status',
                                jantina = '$jantina',
                                warganegara = '$warganegara',
                                jawatan = '$jawatan',
                                kelayakan = '$kelayakan',
                                taraf = '$taraf',
                                PTJ = '$PTJ'
    WHERE namaStaff='$namaStaff'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Updated Successfully";
        header("Location: staffrecord.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: staffrecord.php");
        exit(0);
    }

}

?>