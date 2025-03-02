<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel</title>
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
    <div class="container">
        <div class="row">
            <div class="container">

                <div class="card">
                    <div class="container">

                    <?php
                if(isset($_SESSION['message']))
                {
                echo "<h1>".$_SESSION['message']."</h1>";
                unset($_SESSION['message']);
                }
            ?>
                        <h1>Upload New Excel File</h1>

                        <form action="code.php" method="POST" enctype="multipart/form-data" class="registartion-form">

                        <table>
                          <tr>
                          <td><label for="file">Upload Excel File:</label></td>
                          <td><input type="file" name="import_file" class="form-control"/></td>
                          <td><button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button></td>
              </tr>
              </table>
                        </form>
                        <td><h5>*Only accepted .xlsx, .xls and .csv file type</h6></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
              </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.nav_btn').click(function () {
                    $('.mobile_nav_items').toggleClass('active');
                });
            });
        </script>

  </body>
</html>