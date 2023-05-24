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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->

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
                    <h3 class="text-themecolor">Oders</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Oders</li>
                        </ol>
                    </div>
                </div>
        <!-- End Page wrapper  -->

                <div class="row">
                    <div class="col-lg-12">
                    <div class="card-block">   
                            <div class="col-md-7 col-4 align-self-center"></div>
                            <div class="card-block"> 
                                <h4 class="card-title">All Oders</h4>
                                <div class="table-responsive" style="height: 400px;overflow: scroll;">
                                    <table class="table table-striped table-responsive-md table-bordered my-5" style="width:100%" id="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Oders Id</th>
                                                <th>Date and Time</th>
                                                <th>Adress</th>
                                                <th>city</th>
                                                <th>Delivery</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php


                                                include 'db_connection.php';



                                                $sql = "SELECT * FROM orders WHERE status= 'accept'  "; 
                                                $result = mysqli_query($connection, $sql);

                                                if($result->num_rows>0){
                                                    while($row=$result->fetch_assoc()){
                                                        $TMP_ID = $row["order_id"]; 
                                                        $tmp_deliver = "document.location="."'"."driverorder.php?diliverid=".$TMP_ID."'";
                                                        $tmp_delete = "document.location="."'"."driverorder.php?deleteid=".$TMP_ID."'";

                                                echo    
                                                        ' 
                                                        <tr>
                                                            <td>'.$row["order_id"] .'</td>
                                                            <td>'.$row["date_and_time"] .'</td>
                                                            <td>'.$row["address"] .'</td>
                                                            <td>'.$row["city"] .'</td>
                                                            <td><button type="button"  onclick="'.$tmp_deliver.'"   class="btn btn-success">Confirm</button>
                                                            <button type="button" onclick="'.$tmp_delete.'"  class="btn btn-danger">Return</button></td>

                                                            
                                                       
                                                                
                                                        </tr> 
                                                        
                                                        ';


                                                    }



                                                }
                                                else{

                                                    echo "no result found";
                                                    //echo '<script>alert("No Results Found");</script>';
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


        <!-- Update deliver status -->
        <?php
             if(isset($_GET['deleteid'])){
               $deletid = $_GET['deleteid'];

               $sql = 'UPDATE `orders` SET `status`="return" WHERE order_id = '.$deletid.'' ;
               
               $result = mysqli_query($connection, $sql);
               if($result) {
                   echo '<script>swal("Delete sucsessfull!", Delete sucsessfull.!", "success").then (function(){
                    window.location = "Store.php" ;
                });
                    </script>';
               }

               $sqldriv = 'INSERT INTO `tracking`( `order_id`,`rider_id`)
               VALUES ('.$deletid.','.$_SESSION["driver_id"].')';
               
               
               $result = mysqli_query($connection, $sqldriv);

             }

             if(isset($_GET['diliverid'])){
                $diliverid = $_GET['diliverid'];
 
                $sql = 'UPDATE `orders` SET `status`="deliver" WHERE order_id = '.$diliverid.'' ;
                
                $result = mysqli_query($connection, $sql);
                if($result) {
                    
                    echo '<script>swal("deliver sucsessfull!",order deliver sucsessfull.!", "success").then (function(){
                        window.location = "Store.php" ;
                    });
                        </script>';
                }

                $sqldriv = 'INSERT INTO `tracking`( `order_id`,`rider_id`)
                VALUES ('.$diliverid.','.$_SESSION["driver_id"].')';
                
                $result = mysqli_query($connection, $sqldriv);
              }

              $connection->close();


             
 

        ?>

        <!-- End order-->

        <!-- footer -->
            <!-- <footer class="footer">
               © 2021 Medicare Online Pharmacy System Admin by Kalhara
            </footer>
        </div> -->
        <!-- End footer -->

    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
     <!-- javascript libraries -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="../assets/js/jquery-3.2.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

  

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

</body>

</html>
