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
<html lang>

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
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Orders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery_city</span></a>
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
                    <h3 class="text-themecolor">Orders</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                </div>
        <!-- End Page wrapper  -->
           
        <!-- order -->

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

               

                ?>  update user count card data end

                <div class="row"> 
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
                            <div class="card-header text-success">Accept orders</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                    <p><?php echo  $accept ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card text-white bg-danger mx-3 my-3">
                            <div class="card-header text-danger">Deliver orders</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                    <p><?php echo $deliver ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-primary mx-3 my-3">
                        <div class="card-header text-primary">Reject order</div>
                        <div class="card-body">
                            <div class="card-title">
                                <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                                <p class="mx-auto ms-4"><?php echo $reject ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div> 

                <div class="row">
                    <div class="col-lg-12">
                    <div class="card-block">   
                            <div class="col-md-7 col-4 align-self-center"></div>
                            <div class="card-block"> 
                                <h4 class="card-title">All Orders</h4>
                                <div class="table-responsive" style="height: 400px;overflow: scroll;">
                                    <table class="table table-striped table-responsive-md table-bordered my-5" style="width:100%" id="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Orders Id</th>
                                                <th>Date and Time</th>
                                                <th>Orders Type</th>
                                                <th>Orders</th>
                                                <th>Status</th>
                                                <th>Delivery type</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php


                                                include 'db_connection.php';



                                                $sql = "SELECT * FROM orders"; 
                                                $result = mysqli_query($connection, $sql);

                                                if($result->num_rows>0){
                                                    while($row=$result->fetch_assoc()){
                                                        $id = $row["order_id"];

                                                echo    
                                                        ' 
                                                        <tr>
                                                            <td>'.$row["order_id"] .'</td>
                                                            <td>'.$row["date_and_time"] .'</td>
                                                            <td>'.$row["orderType"] .'</td>
                                                            <td class="btnSelect">  <a href="#"><i class="mdi mdi-table"></i></a> </td>
                                                            <td>'.$row["status"] .'</td>
                                                            <td>'.$row["delivery_type"] .'</td>
                                                                
                                                        </tr> 
                                                        
                                                        ';


                                                    }



                                                }
                                                else{

                                                    echo "no result found";
                                                    //echo '<script>alert("No Results Found");</script>';
                                                }
                                                $connection->close();






                                                ?>

                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
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
    
    <script>
        $(document).ready(function(){

            // code to read selected table row cell data (values).
            $("#table").on('click','.btnSelect',function(){
                // get the current row
                var currentRow=$(this).closest("tr"); 
                
                var id=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
                //var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
                var OrderType=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
                //var data=col1+"\n"+"\n"+col3;

                if(OrderType == 'prescription'){
                    window.location.href = 'view_prescription.php?id='+id;
                }else{
                    window.location.href = 'view_oder.php?id='+id;
                }
                
                //alert(data);
            });
        });
    </script>

</body>

</html>
