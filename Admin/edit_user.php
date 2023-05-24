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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>pharmacis_panale</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
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
                         <a href="login.php" class="login-panel"><i class="fa fa-user" style="width:50px;color: white;"></i></a>
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
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">oders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery city</span></a>
                        </li>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar scroll-->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add users</li>
                        </ol>
                    </div>
                </div>
            </div>
        
        <!-- End Page wrapper -->
            
                <!-- add admin -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="container-fluid">
                        <div class="card" style="width: 1000px; ">


                        <?php


                        include 'db_connection.php'; // connection

                        $id = $_GET["id"];

                        $sql = "SELECT * FROM user WHERE user_id = '".$id."' "; 
                        $result = mysqli_query($connection, $sql);

                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
        
                                    $id = $row["user_id"];
                           
                                
                               
                                 $first_name = $row["first_name"]  ;   
                                 $last_name= $row["last_name"];
                                 $e_mail =  $row["e_mail"];
                                 $phone_number= $row["phone_number"];
                                 $address = $row["address"];
                                 $usertype = $row["user_type"];
                               //echo  $unit_price = $row["unit_price"];
                              // echo  $status=$row["status"].'<br>' ;
                             //  echo  $last_update=$row["last_update"].'<br>';
                                   
                                        
                               
                                
                                


                            }



                        }
                        else{

                            echo "no result found";
                            //echo '<script>alert("No Results Found");</script>';
                        }
                        





                        ?>



                            <div class="card-block">
                            <div class="table-responsive" style="height: 400px;overflow: scroll;" >
                                <form class="form-horizontal form-material" action="" method="POST">
                                    <div class="form-group">

                                    <input type="text" name="user_id" placeholder=""  class="form-control form-control-line" value=<?php echo $id; ?> hidden >

                                        <label class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="first_name" placeholder=""  class="form-control form-control-line" value=<?php echo $first_name; ?> required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="last_name" placeholder="" class="form-control form-control-line" value=<?php echo $last_name; ?> required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="e_mail" placeholder="" class="form-control form-control-line"  id="example-email" value=<?php echo $e_mail; ?> required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone_number" placeholder="" class="form-control form-control-line" value=<?php echo $phone_number; ?> required >
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" placeholder="" class="form-control form-control-line" value=<?php echo $address; ?> required >
                                        </div>
                                    </div>                
                                    <div class="form-group">
                                        <label class="col-sm-12">User type</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="user_type" required >
                                            <option class="hidden"  selected disabled ><?php echo $usertype; ?></option>
                                                <option value ="pharmacist">pharmacis</option>
                                                <option value = "rider">rider</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" style="background-color: #55acee;" name="update">update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                    <!--    update user -->
                        <?php 
                        
                        if(isset($_POST["update"])){
                            $id = $_POST["user_id"]; 
                            $user_type = $_POST["user_type"];

                            $first_name = $_POST["first_name"];
                            $last_name = $_POST["last_name"];
                            $e_mail = $_POST["e_mail"];
                            $phone_number = $_POST["phone_number"];
                            $address = $_POST["address"];
                            $user_type = $_POST["user_type"];

                            include 'db_connection.php';


                            $sql = "UPDATE `user` SET `first_name` = '$first_name', `last_name` = '$last_name', `e_mail` = '$e_mail', `phone_number` = '$phone_number', `address` = '$address', `user_type` = '$user_type' WHERE `user_id` = '$id' ";
                          

                            if ($connection->query($sql) === TRUE) {
                                // echo "Record update successfully";
                                echo '<script>swal("User eddit  success!", "Eddit user success.!", "success").then (function(){
                                    window.location = "users.php" ;
                                });
                                    </script>';
                                } else {
                                echo "Error: " . $sql . "<br>" . $connection->error;
                                }

                                $connection->close();

                        }
                        
                        ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
                <!-- add admin -->    

                <!-- footer -->
                <!--   <footer class="footer">
                        © 2021 Medicare Online Pharmacy System Admin by Kalhara
                    
                  </footer>   -->     
                <!-- End footer --> 
                  
    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>

