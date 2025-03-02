<?php
session_start();
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel = "icon" href = "qs.jpeg" type = "image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <style>
    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }
</style>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>QS <span>World Ranking</span></h3>
      </div>
      <div class="right_area">
      <a href="role.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="img_avatar.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="picdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="manualstaff.php"><i class="fa fa-plus-square"></i><span>Add Manually</span></a>
        <a href="datamanagementpic.php"><i class="fa fa-edit"></i><span>Upload Excel</span></a>
        <a href="staffrecord.php"><i class="fas fa-table"></i><span>Data Record</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="img_avatar.png" class="profile_image" alt="">
        <h4>Person in Charge</h4>
        <h3><li>Online</h3></li>
        
      </div>
      <a href="picdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="manualstaff.php"><i class="fa fa-plus-square"></i><span>Add Manually</span></a>
        <a href="datamanagementpic.php"><i class="fa fa-edit"></i><span>Upload Excel</span></a>
        <a href="staffrecord.php"><i class="fas fa-table"></i><span>Data Record</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <div class="container">
            <h1>Edit Data</h1>

            <?php
                        if(isset($_GET['id']))
                        {
                            $namaStaff = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM staff WHERE namaStaff='$namaStaff'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $staff = mysqli_fetch_array($query_run);
                                ?>

        <form action="editstaffaction.php" name="registration" method="post" class="registartion-form" onsubmit="return formValidation()">
            <input type="hidden" name="fullname" >
              <table>
              <tr>
                <td><label for="noStaff">No Staf:</label></td>
                <td><input type="text" name="noStaff" value="<?= $staff['noStaff'];?>" id="noStaff"></td>
              </tr>
              <tr>
                <td><label for="noKP">No KP:</label></td>
                <td><input type="text" name="noKP" value="<?= $staff['noKP'];?>" id="noKP"></td>
              </tr>
              <tr>
                <td><label for="namaStaff">Nama:</label></td>
                <td><input type="text" name="namaStaff" value="<?= $staff['namaStaff'];?>" id="namaStaff"></td>
              </tr>
              <tr>
                <td><label for="gelaran">Gelaran:</label></td>
                <td><input type="text" name="gelaran" value="<?= $staff['gelaran'];?>" id="gelaran"></td>
              </tr>
              <tr>
              <tr>
                <td><label for="gred">Gred:</label></td>
                <td><input type="text" name="gred" value="<?= $staff['gred'];?>" id="gred"></td>
              </tr>
              <tr>
              <tr>
            <td><label for="status">Status:</label></td>
            <td>
              <select name="status" id="status" required>
                <option value="">Select Status</option>
                <option value="FULLTIME" <?php if($staff['status'] == "FULLTIME") echo "selected"; ?>>FULLTIME</option>
                <option value="PART TIME" <?php if($staff['status'] == "PART TIME") echo "selected"; ?>>PART TIME</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="jantina">Jantina:</label></td>
            <td>
              <select name="jantina" id="jantina" required>
                <option value="">Select Jantina</option>
                <option value="MALE" <?php if($staff['jantina'] == "MALE") echo "selected"; ?>>MALE</option>
                <option value="FEMALE" <?php if($staff['jantina'] == "FEMALE") echo "selected"; ?>>FEMALE</option>
                <option value="OTHERS" <?php if($staff['jantina'] == "OTHERS") echo "selected"; ?>>OTHERS</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="warganegara">Warganegara:</label></td>
            <td>
              <select name="warganegara" id="warganegara" required>
                <option value="">Select Warganegara</option>
                <option value="MALAYSIAN" <?php if($staff['warganegara'] == "MALAYSIAN") echo "selected"; ?>>MALAYSIAN</option>
                <option value="NON-MALAYSIAN" <?php if($staff['warganegara'] == "NON-MALAYSIAN") echo "selected"; ?>>NON-MALAYSIAN</option>
              </select>
            </td>
          </tr>
                <td><label for="jawatan">Jawatan:</label></td>
                <td><input type="text" name="jawatan" value="<?= $staff['jawatan'];?>" id="jawatan"></td>
              </tr>
              <tr>
                <td><label for="kelayakan">Kelayakan:</label></td>
                <td><input type="text" name="kelayakan" value="<?= $staff['kelayakan'];?>" id="kelayakan"></td>
              </tr>
              <tr>
                <td><label for="taraf">Taraf:</label></td>
                <td>
              <select name="taraf" id="taraf" required>
                <option value="">Select Taraf</option>
                <option value="TETAP" <?php if($staff['taraf'] == "TETAP") echo "selected"; ?>>MALAYSIAN</option>
                <option value="KONTRAK" <?php if($staff['taraf'] == "KONTRAK") echo "selected"; ?>>NON-MALAYSIAN</option>
              </select>
            </td>
              </tr>
              <tr>
              <tr>
                  <td><label for="PTJ">PTJ:</label></td>
                  <td><select name="PTJ" value="<?=$staff['PTJ'];?>" id="PTJ">
                    <option value="">Select PTJ</option>
                    <option value="Pejabat Pendaftar" <?php if($staff['PTJ'] == "Pejabat Pendaftar") echo "selected"; ?>>Pejabat Pendaftar</option>
                    <option value="Pejabat Bendahari" <?php if($staff['PTJ'] == "Pejabat Bendahari") echo "selected"; ?>>Pejabat Bendahari</option>
                    <option value="Bahagian Akademik" <?php if($staff['PTJ'] == "Bahagian Akademik") echo "selected"; ?>>Bahagian Akademik</option>
                    <option value="Pusat Asasi" <?php if($staff['PTJ'] == "Pusat Asasi") echo "selected"; ?>>Pusat Asasi</option>
                    <option value="Pusat Antarabangsa" <?php if($staff['PTJ'] == "Pusat Antarabangsa") echo "selected"; ?>>Pusat Antarabangsa</option>
                    <option value="Bahagian Bakat dan Inovasi" <?php if($staff['PTJ'] == "Bahagian Bakat dan Inovasi") echo "selected"; ?>>Bahagian Bakat dan Inovasi</option>
                    <option value="HEPA" <?php if($staff['PTJ'] == "HEPA") echo "selected"; ?>>HEPA</option>
                  </select></td>
                </tr>
              <tr>
                  <td colspan="5"><input type="submit" name="update_data" class="submit" value="Update" /></td>
                </tr>
              </table>
        </form>

        <?php
                            }
                            else
                            {
                                echo "<h1>No Such Id Found</h1>";
                            }
                        }
                        ?>

          </div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>