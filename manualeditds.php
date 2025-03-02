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
            <h1>Edit Data</h1>

            <?php
                        if(isset($_GET['id']))
                        {
                            $fullname = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM students WHERE fullname='$fullname'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $students = mysqli_fetch_array($query_run);
                                ?>

        <form action="editdatads.php" name="registration" method="post" class="registartion-form">
            <input type="hidden" name="fullname" >
              <table>
                <tr>
                  <td><label for="fullname">Full Name:</label></td>
                  <td><input type="text" name="fullname" value="<?= $students['fullname'];?>" id="fullname" placeholder="Full Name"></td>
                </tr>
                <tr>
                  <td><label for="email">Email:</label></td>
                  <td><input type="text" name="email" value="<?= $students['email'];?>" id="email" placeholder="Email"></td>
                </tr>
                <tr>
                  <td><label for="phone">Phone Number:</label></td>
                  <td><input type="text" name="phone" value="<?= $students['phone'];?>" id="phone"></td>
                </tr>
                <tr>
                    <td><label for="course">Course:</label></td>
                    <td><input type="text" name="course" value="<?= $students['course'];?>" id="course"></td>
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