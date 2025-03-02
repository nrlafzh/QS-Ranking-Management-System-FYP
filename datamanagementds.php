<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management</title>
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
      <a href="datamanagementds.php"><i class="fa fa-edit"></i><span>Data Management</span></a>
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
      <a href="datamanagementds.php"><i class="fa fa-edit"></i><span>Data Management</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="table" style="background-color: #fff; padding: 15px; margin-bottom: 10px; opacity: 0.9">
            <div style="overflow-x:auto;">

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by File Name"
                    title="Type in a name">


                <table id="myTable">

                    <tr class="header">
                        <th>File Name</th>
                        <th>PIC ID</th>
                        <th>Department</th>
                        <th>Date Issued</th>
                        <th>Upload Status</th>
                        <th>Authoritory</th>
                        <th>Remark</th>
                        <th>View</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td><input type="submit" class="button" value="Update" onclick="addField(this);" />
                        <br><input type="submit" class="button" value="Delete" onclick="addField(this);" />
                        </td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td><input type="submit" class="button" value="Update" onclick="addField(this);" />
                        <br><input type="submit" class="button" value="Delete" onclick="addField(this);" />
                        </td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td><input type="submit" class="button" value="Update" onclick="addField(this);" />
                        <br><input type="submit" class="button" value="Delete" onclick="addField(this);" />
                        </td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td><input type="submit" class="button" value="Update" onclick="addField(this);" />
                        <br><input type="submit" class="button" value="Delete" onclick="addField(this);" />
                        </td>
                    </tr>
                    <tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td><input type="submit" class="button" value="Update" onclick="addField(this);" />
                        <br><input type="submit" class="button" value="Delete" onclick="addField(this);" />
                        </td>
                    </tr>
                </table>
            </div>
            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
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