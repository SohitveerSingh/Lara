<?php
session_start();
if (!isset($_SESSION["loggedin"])|| $_SESSION["loggedin"] != true  ){
  
  header("Location: login.php");
          exit();
    
}
else{
    $islogin = true;
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-layout-mode="fluid" data-topbar-color="light" data-menu-color="dark"
  data-sidenav-size="default" data-layout-position="fixed">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="/favicon.ico" type="image/svg+xml" href="https://themes.techzaa.in/logo.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Welcome- <?php $_SESSION['username']?></title>

 <!-- Page CSS  -->
  <link rel="stylesheet" href="./style.css">

  <!-- remix Icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
    integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    
</head>

<body>
  <div id="root">
    <div class="wrapper">
      <div class="navbar-custom">
        <?php
        require "./comps/header.php"
        ?>
      </div>
      <div class="leftside-menu">
         <?php
        require "./comps/navbar.php"
        ?>
      </div>

      <div class="content-page">
        <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="card">
                <div class="card-header">
                  <h4 class="header-title" id="tableTitle">Activation History</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="usersTable" role="table" class="table table-centered react-table">
                      <thead>
                        <tr role="row">
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            id
                          </th>
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            username
                          </th>
                          <th colspan="1" role="columnheader" class="">
                            mobileNumber
                          </th>
                          <th colspan="1" role="columnheader" title="Toggle SortBy" class="sortable"
                            style="cursor: pointer">
                            status
                          </th>
                          <th colspan="1" role="columnheader" class="">
                            date
                          </th>
                        </tr>
                      </thead>
                      <tbody role="rowgroup">

                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "userdb";
                        // Create connection
                        $connection = new mysqli($servername, $username, $password, $database);

                        $fetching_user = $connection->prepare("SELECT * FROM userinfo ");
                        // $fetching_user->bind_param('s', $id); 
                        $fetching_user->execute();
                        
                        $fetching_user->bind_result($id, $username, $mobileNumber, $status, $date);
                        
                        $result = $fetching_user->get_result();

                        while ($row = $result->fetch_assoc()) {
                          echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['username']}</td>
                          <td>{$row['mobileNumber']}</td>
                          <td>{$row['status']}</td>
                          <td>{$row['date']}</td>
                          </tr>";
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <footer class="footer">
          <?php
          require "./comps/footer.php"
            ?>
        </footer>
      </div>

    </div>
  </div>


</body>

<script>

function toggleHighlight() {
var element = document.getElementById("collapseProfile");
element.classList.toggle("collapse");
}

function toggleBonus() {
var element = document.getElementById("collapseBonus");
element.classList.toggle("collapse");
}

function toggleTeam() {
var element = document.getElementById("collapseTeam");
element.classList.toggle("collapse");
}

$(document).ready(function() {
$('#usersTable').DataTable();
});

</script>


</html>