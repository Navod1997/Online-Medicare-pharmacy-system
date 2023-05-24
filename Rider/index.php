<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["driver_id"])){
    
    
}
else{
    header("location:../home_page.php");
}
?>

<!DOCTYPE html>
<html lang>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>Rider_panale</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper-->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <img src="assets\images\logo2.png" alt="homepage" class="light-logo" style="width:140px;">
                </div>
                <!-- Search -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> 
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- Profile -->
                    <div class="ht-right">
                         <a href="my_account.php" class="login-panel"><i class="fa fa-user" style="width:50px;"></i></a>
                          <a href=".." class="login-panel"><i class="fa fa-sign-out" style="width:50px;"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Main wrapper-->

        <!-- Sidebar-->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="driverorder.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Orders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="orders_history.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Orders History</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar scroll-->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
        <!-- End Page wrapper -->

        <?php
  
            $countOrders = "SELECT COUNT(CASE status WHEN 'accept' THEN 1 ELSE NULL END) AS accept  FROM `orders`";
            $countOrdersResult = mysqli_query($connection, $countOrders);
            $checkResult = mysqli_fetch_assoc($countOrdersResult);

            $countriderorders = "SELECT COUNT(CASE status WHEN 'return' THEN 1 ELSE NULL END) AS reject, COUNT(CASE status WHEN 'deliver' THEN 1 ELSE NULL END) AS deliver FROM `orders`,`tracking` WHERE tracking.order_id = orders.order_id AND tracking.rider_id = ".$_SESSION["driver_id"]." ; ";
            $countRiderOrdersResult = mysqli_query($connection, $countriderorders);
            $checkRiderResult = mysqli_fetch_assoc($countRiderOrdersResult);
            

            if(mysqli_num_rows($countOrdersResult)>0){
                
                $pending = $checkResult['accept'];
            }


            if(mysqli_num_rows($countRiderOrdersResult)>0){
                
                $Deliverorders =  $checkRiderResult['deliver'];
                $reject =  $checkRiderResult['reject'];
            }



        ?>  <!-- update user count card data end -->

      <div class="row"> <!-- Card row Start -->
          <div class="card-topic ms-3">
          </div>
          <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card text-white bg-primary mx-3 my-3">
                  <div class="card-header text-primary">Pending orders</div>
                  <div class="card-body">
                      <div class="card-title">
                          <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                          <p><?php echo  $pending ?></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card text-white bg-success mx-3 my-3">
                  <div class="card-header text-success">Deliver orders</div>
                  <div class="card-body">
                      <div class="card-title">
                          <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                          <p><?php echo  $Deliverorders ?></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card text-white bg-danger mx-3 my-3">
                  <div class="card-header text-danger">Return order</div>
                  <div class="card-body">
                      <div class="card-title">
                          <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                          <p><?php echo $reject ?></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div> <!-- Card row end -->

                <!-- Start Page Content -->
               
            </div>
            <footer class="footer"> © 2023 Medicare Online Pharmacy System Admin by Kalhara </footer>
        </div>
    </div>
   
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>
