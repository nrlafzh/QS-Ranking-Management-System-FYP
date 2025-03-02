<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
            <h1>Person in Charge Registration</h1>
            <form action="insert.php" name="registration" method="post" class="registartion-form" onsubmit="return formValidation()">
              <table>
                <tr>
                  <td><label for="fullname">Full Name:</label></td>
                  <td><input type="text" name="fullname" id="fullname" placeholder="Full Name"></td>
                </tr>
                <tr>
                  <td><label for="icnumber">IC Number:</label></td>
                  <td><input type="text" name="icnumber" id="icnumber" placeholder="IC"></td>
                </tr>
                <tr>
                  <td><label for="phonenumber">Phone Number:</label></td>
                  <td><input type="text" name="phonenumber" id="phonenumber"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                  <td><label for="PTJ">PTJ:</label></td>
                  <td><select name="PTJ" id="PTJ">
                    <option value="">Select PTJ</option>
                    <option value="Pejabat Pendaftar">Pejabat Pendaftar</option>
                    <option value="Pejabat Bendahari">Pejabat Bendahari</option>
                    <option value="Bahagian Akademik">Bahagian Akademik</option>
                    <option value="Pusat Asasi">Pusat Asasi</option>
                    <option value="Pusat Antarabangsa">Pusat Antarabangsa</option>
                    <option value="Bahagian Bakat dan Inovasi">Bahagian Bakat dan Inovasi</option>
                    <option value="HEPA">HEPA</option>
                  </select></td>
                </tr>
                <tr>
                  <td><label for="username">Username:</label></td>
                  <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                  <td><label for="accessID">Access Type:</label></td>
                  <td><select name="accessID" id="accessID">
                    <option value="">Select Accessibility</option>
                    <option value="Staff">Staff</option>
                    <option value="Student">Student</option>
                    <option value="Exchange Student">Exchange Student</option>
                    <option value="Fee">Fee</option>
                  </select></td>
                </tr>
                
                <tr>
                  <td colspan="5"><input type="submit" class="submit" value="Add"/></td>
                </tr>
              </table>
            </form>
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