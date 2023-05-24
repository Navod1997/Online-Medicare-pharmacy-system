<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["pharmacist_id"])){
    
    
}
else{
    header("location:../home_page.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    
    <title>pharmacist_panale</title>
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
                         <a href="login.php" class="login-panel"><i class="fa fa-user" style="width:50px;"></i></a>
                          <a href="../logout.php" class="login-panel"><i class="fa fa-sign-out" style="width:50px;"></i></a>
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
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">oders</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Bottom points-->
            
        </aside>
        <!-- End Sidebar scroll-->
       
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">My account</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">My account</li>
                        </ol>
                    </div>
                </div>
        <!-- End Page wrapper  -->


    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                        <h2>Change Password</h2>
                        <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" >
                            <div class="col-12 mt-1 mb-2">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control pwd" name="password1" id="password" minlength="8" maxlength="25"  required>
                                <i class="fa fa-eye" onclick = "passwordshow()"></i>
                            </div>
                            <div class="col-12 mt-1 mb-2">
                                <label for="conPass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control pwd" name="password2" id="conPass" minlength="8" maxlength="25"  required>
                                <i class="fa fa-eye" onclick = "passwordshow()"></i>
                            </div>
                            <div class="col-12  form-check" style="padding-left:20px;">
                                <label class="form-check-label" for="easy" id="errorPassword"></label>
                            </div>
                            <div class="col-12 mt-2 ">
                                <button type="submit" name="change_pass" onclick="return checkpassword()" class="site-btn login-btn">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
                    
    </div>
    </div>
    <!-- End my account-->

    <?php

        

        if(isset($_POST["change_pass"])) {

            $admin_id = $_SESSION["admin_id"] ;
            $password1 =md5($_POST["password1"]);
            $password2 =md5($_POST["password2"]);


            if(!empty($password1) && !empty($password2) && ($password1 == $password2))   // records were not empty and equal

            { 
                
            
            $upsatesql = "UPDATE `user` SET password = '".$password2."' Where user_id='".$admin_id."'";

                if ($connection->query($upsatesql) === TRUE) {

                    echo '<script>swal("Password success!", "Password change is success.!", "success").then (function(){
                                    window.location = "home_page.php" ;
                                });
                                    </script>';

                    session_destroy();
                    header("Location: home_page.php");
    

                    } else {
                    echo "Error: " . $upsatesql . "<br>" . $connection->error;
                    }

                    
                }
                else
                {
                    echo '<script>swal("Erro", "Change Password successful!", "success");</script>';
                }

                $connection->close();
                    
        }
        
                        
                                                    
    ?>

    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    

    <script>
    function passwordshow() {
        var $pwd = $(".pwd");
    var eye1 = document.getElementById("eye");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
        eye1.classList.add("fa-eye-slash");
        eye1.classList.remove("fa-eye");
        showPassword = true;
    } else {
        $pwd.attr('type', 'password');
        eye1.classList.remove("fa-eye-slash");
        eye1.classList.add("fa-eye");
        showPassword = false;
    }
    }
    </script>

</body>

</html>
