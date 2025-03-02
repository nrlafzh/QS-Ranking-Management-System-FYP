<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff Data</title>
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
      <h1>Add Data Manually</h1>
      <form action="insertStaff.php" name="registration" method="post" class="registartion-form" onsubmit="return formValidation()">
        <table>
          <tr>
            <td><label for="noStaff">No Staff:</label></td>
            <td><input type="text" name="noStaff" id="noStaff" maxlength="8" required></td>
          </tr>
          <tr>
            <td><label for="noKP">No KP:</label></td>
            <td><input type="text" name="noKP" id="noKP" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" required></td>
          </tr>
          <tr>
            <td><label for="namaStaff">Nama:</label></td>
            <td><input type="text" name="namaStaff" id="namaStaff"  required></td>
          </tr>
          <tr>
            <td><label for="gelaran">Gelaran:</label></td>
            <td><input type="text" name="gelaran" id="gelaran"  required></td>
          </tr>
          <tr>
            <td><label for="gred">Gred:</label></td>
            <td><input type="text" name="gred" id="gred"  required></td>
          </tr>
          <tr>
            <td><label for="status">Status:</label></td>
            <td>
              <select name="status" id="status" required>
                <option value="">Select Status</option>
                <option value="FULLTIME">FULLTIME</option>
                <option value="PART TIME">PART TIME</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="jantina">Jantina:</label></td>
            <td>
              <select name="jantina" id="jantina" required>
                <option value="">Select Jantina</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="warganegara">Warganegara:</label></td>
            <td>
              <select name="warganegara" id="warganegara" required>
                <option value="">Select Warganegara</option>
                <option value="MALAYSIAN">MALAYSIAN</option>
                <option value="NON-MALAYSIAN">NON-MALAYSIAN</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="jawatan">Jawatan:</label></td>
            <td><input type="text" name="jawatan" id="jawatan"  required></td>
          </tr>
          <tr>
            <td><label for="kelayakan">Kelayakan:</label></td>
            <td><input type="text" name="kelayakan" id="kelayakan"  required></td>
          </tr>
          <tr>
            <td><label for="taraf">Taraf:</label></td>
            <td>
              <select name="taraf" id="taraf" required>
                <option value="">Select Taraf</option>
                <option value="TETAP">TETAP</option>
                <option value="KONTRAK">KONTRAK</option>
              </select>
            </td>
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
            <td colspan="2"><input type="submit" class="submit" value="Add" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
    <script>
  function formValidation() {
    var noStaff = document.getElementById("noStaff").value;
    var noKP = document.getElementById("noKP").value;
    var namaStaff = document.getElementById("namaStaff").value;
    var gelaran = document.getElementById("gelaran").value;
    var gred = document.getElementById("gred").value;
    var status = document.getElementById("status").value;
    var jantina = document.getElementById("jantina").value;
    var warganegara = document.getElementById("warganegara").value;
    var jawatan = document.getElementById("jawatan").value;
    var kelayakan = document.getElementById("kelayakan").value;
    var taraf = document.getElementById("taraf").value;
    var PTJ = document.getElementById("PTJ").value;

    // Check if any field is empty
    if (noStaff == "" || noKP == "" || namaStaff == "" || gelaran == "" || gred == "" || status == "" || jantina == "" || warganegara == "" || jawatan == "" || kelayakan == "" || taraf == "" || PTJ == "") {
      alert("Please fill in all fields.");
      return false;
    }

    // Check if No KP is in the correct format
    var kpPattern = /^[0-9]{6}-[0-9]{2}-[0-9]{4}$/;
    if (!noKP.match(kpPattern)) {
      alert("Please enter a valid No KP format (e.g., 123456-78-9012).");
      return false;
    }

    // Check if Gred is in the correct format
    var gredPattern = /^[A-Za-z]{1}[0-9]{1,4}$/;
    if (!gred.match(gredPattern)) {
      alert("Please enter a valid Gred format starting with a letter followed by up to 4 digits (e.g., A1234).");
      return false;
    }

    return true;
  }
</script>
  </body>
</html>