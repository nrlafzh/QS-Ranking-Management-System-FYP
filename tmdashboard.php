<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
        <link rel = "icon" href = "qs.jpeg" type = "image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
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
        <a href="tmdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="report.php"><i class="fas fa-table"></i><span>Report</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="img_avatar.png" class="profile_image" alt="">
        <h4>Top Management</h4>
        <h3><li>Online</h3></li>
        
      </div>
      <a href="tmdashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="report.php"><i class="fas fa-table"></i><span>Report</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">This Year Student Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="number">1500.25</div>
              <div class="indicator">
                <span class="text">Last updated on 1 January 2022 13:00</span>
              </div>
            </div>
            <i class='fa fa-coins cart one'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Pending Validation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="number">3</div>
              <div class="indicator">
                <span class="text"><u>View details</u></span>
              </div>
            </div>
            <i class='fa fa-hourglass cart two' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Pending Submission&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="number">2</div>
              <div class="indicator">
                <span class="text"><u>View details</u></span>
              </div>
            </div>
            <i class='fa fa-hourglass cart three' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">This Year Staff Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="number">1500.25</div>
              <div class="indicator">
                <span class="text">Last updated on 1 January 2022 13:00</span>
              </div>
            </div>
            <i class='fa fa-coins cart four' ></i>
          </div>
        </div>
  
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">QS Data Status</div>
            <br>
            <div class="sales-details">
              <ul class="details">
                <li class="topic">Date</li>
                <li><a href="#">12 Nov 2021</a></li>
                <li><a href="#">12 Nov 2021</a></li>
                <li><a href="#">20 Nov 2021</a></li>
                <li><a href="#">23 Nov 2021</a></li>
                <li><a href="#">15 Dec 2021</a></li>
                <li><a href="#">30 Dec 2021</a></li>
              </ul>
              <ul class="details">
              <li class="topic">Data code</li>
              <li><a href="#">NS1001/2</a></li>
              <li><a href="#">PRD0004</a></li>
              <li><a href="#">TYT2011/12</a></li>
              <li><a href="#">FD3002</a></li>
              <li><a href="#">MZ1800</a></li>
              <li><a href="#">HY8007</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Department</li>
              <li><a href="#">Pejabat Pendaftaran</a></li>
              <li><a href="#">Bahagian Akademik</a></li>
              <li><a href="#">Pejabat Bendahari</a></li>
              <li><a href="#">HEPA</a></li>
              <li><a href="#">HEPA</a></li>
              <li><a href="#">Pusat Asasi</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Status</li>
              <li><a href="#">Submitted</a></li>
              <li><a href="#">Need Validation</a></li>
              <li><a href="#">Submitted</a></li>
              <li><a href="#">Need Validation</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Submitted</a></li>
            </ul>
            
            </div>
            <br>
            <div class="button">
              <a href="#">See Details</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title" style="padding: 20px 30px;">Fee Report</div>
            <head>
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
          
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Month', 'Student', 'Staff'],
                    ['October',  1000,      400],
                    ['November',  1170,      460],
                    ['December',  660,       1120],
                    ['January',  1030,      540]
                  ]);
          
                  var options = {
                    title: 'October - Recent',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                  };
          
                  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
          
                  chart.draw(data, options);
                }
              </script>
            </head>
            <body>
              <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </body>
          </div>
        </div>
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