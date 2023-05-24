<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["admin_id"])){
    
    
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
    <link rel="icon" type="image/png" sizes="16x16" href="img\slidephoto\logo2.png">

    <title>Admin_panale</title>
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
                         <a href="my_account.php" class="login-panel"><i class="fa fa-user" style="width:50px;color: white;"></i></a>
                          <a href="../logout.php" class="login-panel"><i class="fa fa-sign-out" style="width:50px;color: white;"></i></a>
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
                        <li> <a class="waves-effect waves-dark" href="category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Orders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery city</span></a>
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

        <!-- order -->

        <!-- <h2>Orders</h2>

        <?php
  
            $countOrders = "SELECT COUNT(CASE status WHEN 'pending' THEN 1 ELSE NULL END) AS pending, COUNT(CASE status WHEN 'reject' THEN 1 ELSE NULL END) AS reject, COUNT(CASE status WHEN 'accept' THEN 1 ELSE NULL END) AS accept, COUNT(CASE status WHEN 'deliver' THEN 1 ELSE NULL END) AS deliver FROM `orders`";
            $countOrdersResult = mysqli_query($connection, $countOrders);
            $checkResult = mysqli_fetch_assoc($countOrdersResult);

            if(mysqli_num_rows($countOrdersResult)>0){
                
                $pending = $checkResult['pending'];
                $accept = $checkResult['accept'];
                $deliver = $checkResult['deliver'];
                $reject = $checkResult['reject'];
            }



            ?>  update user count card data end -->

            <div class="row"> 
                <div class="card-topic ms-3">
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-primary mx-3 my-3">
                        <div class="card-header text-primary" style="text-align:center ;"> <img src="https://img.icons8.com/fluency/25/null/purchase-order.png"/>Pending orders</div>
                        <div class="card-body">
                            <div class="card-title">
                                <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                <p style="text-align: center;font-size:50px"><?php echo  $pending ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-success mx-3 my-3">
                        <div class="card-header text-success" style="text-align:center ;"><img src="https://img.icons8.com/fluency/20/null/approval.png"/>Accept orders</div>
                        <div class="card-body">
                            <div class="card-title">
                                <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                <p style="text-align: center;font-size:50px"><?php echo  $accept ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-danger mx-3 my-3">
                        <div class="card-header text-danger" style="text-align:center ;"><img src="https://img.icons8.com/fluency/25/null/shipped.png"/>Deliver orders</div>
                        <div class="card-body">
                            <div class="card-title">
                                <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                <p style="text-align: center;font-size:50px"><?php echo $deliver ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card text-white bg-primary mx-3 my-3">
                    <div class="card-header text-primary" style="text-align:center ;"><img src="https://img.icons8.com/fluency/20/null/delete-view.png"/>Reject order</div>
                    <div class="card-body">
                        <div class="card-title">
                            <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                            <p style="text-align: center;font-size:50px"><?php echo $reject ?></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>

    
            <!-- Start Page Content -->
               
            </div>
            <footer class="footer"> © 2022 Medicare Online Pharmacy System Admin by Kalhara </footer>
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
