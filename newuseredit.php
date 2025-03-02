<?php
session_start();
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <link rel = "icon" href = "qs.jpeg" type = "image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style>
    .error {color: #FF0000;}
</style>

  </head>
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
      <a href="dsdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="newuser.php"><i class="fa fa-plus-square"></i><span>User Registeration</span></a>
      <a href="userrecord.php"><i class="fas fa-table"></i><span>User Record</span></a>
      <a href="datarecordds.php"><i class="fa fa-edit"></i><span>Data Management</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="img_avatar.png" class="profile_image" alt="">
        <h4>Data Secretariat</h4>
        <h3><li>Online</h3></li>
        
      </div>
      <a href="dsdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="newuser.php"><i class="fa fa-plus-square"></i><span>User Registeration</span></a>
      <a href="userrecord.php"><i class="fas fa-table"></i><span>User Record</span></a>
      <a href="datarecordds.php"><i class="fa fa-edit"></i><span>Data Management</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <div class="container">
            <h1>User Edit</h1>

            <?php
                        if(isset($_GET['id']))
                        {
                            $username = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM user WHERE username='$username'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>

            <form action="edit.php" name="registration" method="post" class="registartion-form" onsubmit="return formValidation()">
            <input type="hidden" name="username" value="<?= $user['username']; ?>">
              <table>
                <tr>
                  <td><label for="fullname">Full Name:</label></td>
                  <td><input type="text" name="fullname" value="<?=$user['fullname'];?>" id="fullname" placeholder="Full Name"></td>
                </tr>
                <tr>
                  <td><label for="icnumber">IC Number:</label></td>
                  <td><input type="text" name="icnumber" value="<?=$user['icnumber'];?>" id="icnumber" placeholder="IC"></td>
                </tr>
                <tr>
                  <td><label for="phonenumber">Phone Number:</label></td>
                  <td><input type="text" name="phonenumber" value="<?=$user['phonenumber'];?>" id="phonenumber"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" value="<?=$user['email'];?>" id="email"></td>
                </tr>
                <tr>
                  <td><label for="PTJ">PTJ:</label></td>
                  <td><select name="PTJ" value="<?=$staff['PTJ'];?>" id="PTJ">
                    <option value="">Select PTJ</option>
                    <option value="Pejabat Pendaftar" <?php if($user['PTJ'] == "Pejabat Pendaftar") echo "selected"; ?>>Pejabat Pendaftar</option>
                    <option value="Pejabat Bendahari" <?php if($user['PTJ'] == "Pejabat Bendahari") echo "selected"; ?>>Pejabat Bendahari</option>
                    <option value="Bahagian Akademik" <?php if($user['PTJ'] == "Bahagian Akademik") echo "selected"; ?>>Bahagian Akademik</option>
                    <option value="Pusat Asasi" <?php if($user['PTJ'] == "Pusat Asasi") echo "selected"; ?>>Pusat Asasi</option>
                    <option value="Pusat Antarabangsa" <?php if($user['PTJ'] == "Pusat Antarabangsa") echo "selected"; ?>>Pusat Antarabangsa</option>
                    <option value="Bahagian Bakat dan Inovasi" <?php if($user['PTJ'] == "Bahagian Bakat dan Inovasi") echo "selected"; ?>>Bahagian Bakat dan Inovasi</option>
                    <option value="HEPA"<?php if($user['PTJ'] == "HEPA") echo "selected"; ?>>HEPA</option>
                  </select></td>
                </tr>
                <tr>
                  <td><label for="username">Username:</label></td>
                  <td><input type="text" name="username" value="<?=$user['username'];?>" id="username"></td>
                </tr>
                  <tr>
                  <td><label for="accessID">Access Type:</label></td>
                  <td><select name="accessID" id="accessID">
                  <option value="">Select Accessibility</option>
                  <option value="Staff" <?php if($user['accessID'] == "Staff") echo "selected"; ?>>Staff</option>
                  <option value="Student" <?php if($user['accessID'] == "Student") echo "selected"; ?>>Student</option>
                  <option value="Exchange Student" <?php if($user['accessID'] == "Exchange Student") echo "selected"; ?>>Exchange Student</option>
                  <option value="Fee" <?php if($user['accessID'] == "Fee") echo "selected"; ?>>Fee</option>
                  </select></td>
                </tr>
                <tr>
                  <td colspan="5"><input type="submit" name="update_user"class="submit" value="Update" /></td>
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
    function formValidation() {
      var fullname = document.getElementById("fullname").value;
      var icnumber = document.getElementById("icnumber").value;
      var phonenumber = document.getElementById("phonenumber").value;
      var email = document.getElementById("email").value;
      var PTJ = document.getElementById("PTJ").value;
      var username = document.getElementById("username").value;
      var accessID = document.getElementById("accessID").value;
      
      var error = "";
      
      if (fullname === "") {
        error += "Full Name is required.\n";
      }
      
      if (!/^\d{12}$/.test(icnumber)) {
        error += "IC Number should be 12 digits.\n";
      }
      
      if (!/^\d{10}$/.test(phonenumber)) {
        error += "Phone Number should be 10 digits.\n";
      }
      
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        error += "Invalid email format.\n";
      }
      
      if (PTJ === "") {
        error += "PTJ is required.\n";
      }
      
      if (username === "") {
        error += "Username is required.\n";
      }
      
      if (accessID === "") {
        error += "Accessibility is required.\n";
      }
      
      if (error !== "") {
        alert("Please correct the following errors:\n" + error);
        return false;
      }
      
      return true;
    }
    
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>