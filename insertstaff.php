<?php

    require_once("connection.php");

            $noStaff = $_POST['noStaff'];
                                $noKP = $_POST['noKP'];
                                $namaStaff = $_POST['namaStaff'];
                                $gelaran = $_POST['gelaran'];
                                $gred = $_POST['gred'];
                                $status = $_POST['status'];
                                $jantina = $_POST['jantina'];
                                $warganegara = $_POST['warganegara'];
                                $jawatan = $_POST['jawatan'];
                                $kelayakan = $_POST['kelayakan'];
                                $taraf = $_POST['taraf'];
                                $PTJ = $_POST['PTJ'];

            $query = " insert into staff (noStaff, noKP, namaStaff, gelaran, gred, status, jantina, warganegara, jawatan, kelayakan, taraf, PTJ) 
            values('$noStaff', '$noKP', '$namaStaff', '$gelaran', '$gred', '$status', '$jantina', '$warganegara', '$jawatan', '$kelayakan', '$taraf', '$PTJ')";
            $result = mysqli_query($conn, $query);
           
            if($result)
            {
                header("location:staffrecord.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }

?>