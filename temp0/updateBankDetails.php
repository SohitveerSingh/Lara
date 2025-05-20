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
  <link rel="stylesheet" href="./extra.css">

  <!-- remix Icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
    integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    
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
        <div class="content" id="TableCon">
           <div class="container-fluid">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title" id="tableTitle">Update Bank Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="">
                                                    <div id="formDesign">
                                                        <div class="col-lg-5 ">

                                                            <div class="mb-3 row">
                                                                <label class="form-label col-form-label col-sm-3">
                                                                    Name
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input placeholder="Account Holder Name" type="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="mb-3 row">
                                                                <label class="form-label col-form-label col-sm-3">
                                                                    Bank Name
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input placeholder="Bank Name" type="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label class="form-label col-form-label col-sm-3">
                                                                    Account No
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input placeholder="Account Number" type="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="mb-3 row">
                                                                <label class="form-label col-form-label col-sm-3">
                                                                    IFSC Code
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input placeholder="IFSC Code" type="text"
                                                                        class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="mb-3 row">
                                                                <label class="form-label col-form-label col-sm-3">
                                                                    Credit Card
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input placeholder="Credit Card Number" type="text"
                                                                        class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>

                     
                                                    </div>
                                                    <div class="centerBtn" >
                                                        <div>
                                                            <button type="submit" class="btn stylebtn btn-info">
                                                                Confirm
                                                            </button>
                                                            <button type="submit" class="btn stylebtnCancel ">
                                                                Cancel
                                                            </button>

                                                        </div>
                                                    

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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

</script>


</html>