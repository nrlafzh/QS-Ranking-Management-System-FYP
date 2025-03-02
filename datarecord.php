<?php 

    require_once("connection.php");
    $studentQuery = " select * from students ";
    $result = mysqli_query($conn, $studentQuery);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIC Record</title>
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
        <a href="manual.php"><i class="fa fa-plus-square"></i><span>Add Manually</span></a>
        <a href="datamanagementpic.php"><i class="fa fa-edit"></i><span>Upload Excel</span></a>
        <a href="datarecord.php"><i class="fas fa-table"></i><span>Data Record</span></a>
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
        <a href="manual.php"><i class="fa fa-plus-square"></i><span>Add Manually</span></a>
        <a href="datamanagementpic.php"><i class="fa fa-edit"></i><span>Upload Excel</span></a>
        <a href="datarecord.php"><i class="fas fa-table"></i><span>Data Record</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="table" style="background-color: #fff; padding: 15px; margin-bottom: 10px; opacity: 0.9">
            <div style="overflow-x:auto;">

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Name"
                    title="Type in a name">


                <table id="myTable">

                    <tr class="header">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                    <?php 

                    
                    while($row = mysqli_fetch_assoc($result))
                            
                            {
                                $fullname = $row['fullname'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $course = $row['course'];

                    ?>
                            <tr>
                                <td><?php echo $fullname ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $phone ?></td>
                                <td><?php echo $course ?></td>
                                <td><a href="manualedit.php?id=<?php echo $fullname ?>">Edit</a>
                                <br><a href="deletedatapic.php?Del=<?php echo $fullname ?>"onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                            </tr>        
                    <?php 
                                    }
                                 
                    ?>  
                </table>

                <div style= "background-color:#EFEEF1;padding:25px;">
                        <h4>Export Data</h4>

                        <form action="code.php" method="POST">

                            <select name="export_file_type" class="form-control">
                                <option value="xlsx">XLSX</option>
                                <option value="xls">XLS</option>
                                <option value="csv">CSV</option>
                            </select>

                            <button type="submit" name="export_excel_btn" class="btn btn-primary mt-3">Export</button>

                        </form>

                    </div>

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