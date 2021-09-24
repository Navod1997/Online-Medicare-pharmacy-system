<!DOCTYPE html>
<html>

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
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!--<div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>-->

    <!-- Main wrapper-->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <img src="assets\images\logo2.png" alt="Medicare online pharmacy" class="light-logo" style="width:140px;">
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
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">oders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="prescription.php" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">prescription</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="home_page_eddit.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Page customization</span></a>
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
                    <h3 class="text-themecolor">Store</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Store</li>
                        </ol>
                    </div>
                </div>
        <!-- End Page wrapper  -->
           
        <!-- category -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="col-md-7 col-4 align-self-center"></div>
                            <div class="card-block">    
                                    <a href="Add_items.php" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Add Items</a>
                                <h4 class="card-title">All Items</h4>
                                <div class="table-responsive" style="height: 400px;overflow: scroll;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Catogray Type</th>
                                                <th>Description</th>
                                                <th>Image Path</th>
                                                <th>Quntity</th>
                                                <th>Unit price</th>
                                                <th>Status</th>
                                                <th>last Update<th>
                                                <th>Edit</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php


                                                include 'db_connection.php'; // connection



                                                $sql = "SELECT * FROM item "; 
                                                $result = mysqli_query($connection, $sql);

                                                if($result->num_rows>0){
                                                    while($row=$result->fetch_assoc()){
                                                        //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                                            $id = $row["item_id"];
                                                echo    
                                                        ' 
                                                        <tr>
                                                            <td>'.$row["item_name"] .'</td>
                                                            <td>'.$row["category_type"] .'</td>
                                                            <td>'.$row["discription"].'</td>
                                                            <td>'.$row["data_path"].'</td>
                                                            <td>'.$row["quantity"] .'</td>
                                                            <td>'.$row["unit_price"].'</td>
                                                            <td>'.$row["status"].'</td>
                                                            <td>'.$row["last_update"].'</td>
                                                            <td>  <a href="item_edit.php?id='.$id.'"><i class="mdi mdi-table"></i></a> </td>
                                                            <td>  <a href="delete.php?id='.$id.'&req=itemdelete"><i class="fa fa-trash" ></i></a> </td>
                                                                
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
        <!-- End category-->

        <!-- footer -->
            <footer class="footer">
               © 2021 Medicare Online Pharmacy System Admin by Kalhara
            </footer>
        </div>
        <!-- End footer -->

    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>
