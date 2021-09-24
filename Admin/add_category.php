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
                          <a href="my_account.php" class="login-panel"><i class="fa fa-sign-out" style="width:50px;"></i></a>
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
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
        </aside>
        <!-- End Sidebar scroll-->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">Add category</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="Category.phpp">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add category</li>
                        </ol>
                    </div>
                    </div>
                </div>
                
        <!-- End Page wrapper -->
        
       <!-- Add category -->
       <div class="container register">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="col-md-7 col-4 align-self-center"></div>
                            <div class="card-block">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class>Add Category</h3>
                                <div class="row register-form">
                                <form action="" method="POST" enctype="multipart/form-data">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                           
                                        <b><label for="username">Category Name</label></b>
                                            <input type="text" name="c_name" class="form-control" placeholder="Category Name" value="" required />
                                        </div>
                                        <div class="form-group">
                                        <b><label for="username">Catogray Type</label></b>
                                        <select name="c_type" id="c_type" required class="custom-select" >
                                            <option value="" >Select Category Type</option>
                                            <option value="Medicine">Medicine</option>
                                            <option value="Mediacal Divice">Mediacal Divice</option>
                                            <option value="Wellenss">Wellenss</option>
                                            <option value="Aurwedha">Aurwedha</option>
                                            <option value="Personal Care">Personal Care</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        </div>
                                        
                                    </div>
                                   

                                    <div class="col-md-6">

                                  <!--  <input type="file" name="fileToUpload" id="fileToUpload" required> -->

                                  <input type="file" name="fileToUpload" id="fileToUpload" required> <br>
                                   
                                    

                                    <div class="row" style="padding:50px;">
                                        <input type="submit" name="submit" value="Add Category" class="btn btn-danger">
                                    </div>



                                    </div>

                                            </form>

                                            
                                            <?php 

                                                

                                            // Check if image file is a actual image or fake image
                                            if(isset($_POST["submit"])) {

                                                $target_dir = "category/";
                                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                                $uploadOk = 1;
                                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                                if($check !== false) {
                                                    echo "File is an image - " . $check["mime"] . ".";
                                                    $uploadOk = 1;
                                                } else {
                                                    echo "File is not an image.";
                                                    $uploadOk = 0;
                                                }
                                                

                                                // Check if file already exists
                                            if (file_exists($target_file)) {
                                                echo "Sorry, file already exists.";
                                                $uploadOk = 0;
                                                }

                                                // Check file size
                                            

                                                // Allow certain file formats
                                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                                && $imageFileType != "gif" ) {
                                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                                $uploadOk = 0;
                                                }

                                                // Check if $uploadOk is set to 0 by an error
                                                if ($uploadOk == 0) {
                                                echo "Sorry, your file was not uploaded.";
                                                // if everything is ok, try to upload file
                                                } else {

                                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

                                                    $imgpath = "category/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                                                
                                                    if(!empty($_POST["c_type"] && $_POST["c_name"])){

                                                        $c_type  = $_POST["c_type"];
                                                        $c_name  = $_POST["c_name"];



                                                        echo '<br>';
                                                        echo $c_name;
                                                        echo '<br>';

                                                        echo $c_type;
                                                        echo '<br>';

                                                        echo $imgpath;

                                                        include 'db_connection.php';

                                                        $sql = "INSERT INTO category (c_name, c_type, image_path)
                                                        VALUES('".$c_name."', '".$c_type."', '".$imgpath."')" ;
                                                        
                                                                if ($connection->query($sql) === TRUE) {
                                                                echo "New record created successfully";
                                                                } else {
                                                                echo "Error: " . $sql . "<br>" . $connection->error;
                                                                }

                                                                $connection->close();



                                                    }
                                                
                                                

                                                


                                                } else {
                                                    echo "Sorry, there was an error uploading your file.";
                                                }
                                                }


                                            }





                                            ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>   
        <!-- End store-->

        <!-- footer -->
            <footer>
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
