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
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    
    <title>Admin_panale</title>
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
                        <li> <a class="waves-effect waves-dark" href="prescription.php" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">prescription</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery city</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="home_page_eddit.php" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Report</span></a>
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
        
        
        

        <!--select data-->

        <?php
            

            $admin_id = $_SESSION["admin_id"] ;

            $sqlUser = "SELECT * FROM `user` WHERE user_id='$admin_id';";
            $result = mysqli_query($connection, $sqlUser); //executing
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result) > 0)

            {
                $first_name = $row['first_name'];
                $last_name =$row['last_name'];
                $email =$row['e_mail'];
                $phone_number =$row['phone_number'];
                $address =$row['address'];
                $city =$row['city'];
            }

        ?>

        <!-- my account deatails -->

        <div class="container">
                <div class="row">   
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class>Eddit Account</h2>
                                <form method="POST" action="" enctype="multipart/form-data">

                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <b><label for="username">First name</label></b>
                                            <input type="text" value="<?php echo $first_name;?>"  name="first_name" class="form-control"  value="required" >
                                        </div>
                                        <div class="form-group">
                                        <b><label for="username">Last name</label></b>
                                            <input type="text" value="<?php echo $last_name;?>"  name="last_name" class="form-control"  value="required" >
                                        </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <b><label for="username">Mobile number</label></b>
                                            <input type="text" value="<?php echo $phone_number;?>"  name="phone_number" class="form-control"  value="required" >
                                        </div>
                                        <div class="form-group">
                                        <b><label for="username">Address</label></b>
                                            <input type="text" value="<?php echo $address;?>"  name="address"  class="form-control"  value="required" >
                                        </div>
                                        
                                        <div class="form-group"><b><label for="exampleFormControlTextarea2">City</label><b>
                                            <select class="form-control"  name="city" id="City" required>
                                            <option value="<?php echo $city;?>" selected ><?php echo $city;?></option>
                                                            
                                                            <?php 

                                                            



                                                                $sqlCity = "SELECT city_name FROM delivary_citys "; 
                                                                    $resultCity = mysqli_query($connection, $sqlCity);


                                                                    
                                                                    if($resultCity->num_rows>0){
                                                                        while($row=$resultCity->fetch_assoc()){
                                                                            //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;

                                                                    echo    
                                                                            ' 
                                                                            
                                                                                        <option value="'.$row["city_name"].'">'.$row["city_name"].'</option>
                                                                                
                                                                            
                                                                            ';


                                                                        }
                                                                        


                                                                    }
                                                                    else{

                                                                        echo "no result found";
                                                                        //echo '<script>alert("No Results Found");</script>';
                                                                    }
                                                                //  $connection->close();



                                                            ?>
                                                            
                                            </select>  
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <div class="switch-login">
                                        <button name="update_account" class="btn btn-md btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>             
                </div>
        </div>
    <div>

    
    <!-- account update--> 

    <?php

            if(isset($_POST["update_account"])) {

                $first_name =$_POST["first_name"];
                $last_name =$_POST["last_name"];
                $phone_number =$_POST["phone_number"];
                $address =$_POST["address"];
                $city =$_POST['city'];

                $updatesql = "UPDATE `user` SET `first_name` = '".$first_name."', `last_name` = '".$last_name."', `phone_number` = '".$phone_number."', `address` = '".$address."', `city` = '".$city."' WHERE `user_id` ='".$admin_id."'";

                    if ($connection->query($updatesql) === TRUE) {

                        echo '<script>swal("Password success!", "change account details is success.!", "success").then (function(){
                                        window.location = "my_account.php" ;
                                    });
                                        </script>';
                        } else {
                        echo '<script>swal("Erro", "Not change is account details!", "success");</script>';
                        echo "Error: " . $updatesql . "<br>" . $connection->error;
                        }

                        $connection->close();
                    } 
            

                            
                                                        
    ?>


        <!-- End my account-->

    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>
