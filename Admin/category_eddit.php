<?php
//Database connection 
include 'db_connection.php';
session_start();

if (isset($_SESSION["admin_id"])) {
} else {
    header("location:../home_page.php");
}
?>

<!DOCTYPE html>
<html lang="en">

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

    <style>
        .imagePreview {
            width: 120PX;
            height: 110px;
            background-position: center center;
            background: url(http://bastianandre.at/giphy.gif);
            border-color: #57247c;
            border-top: 1px solid #a694b1;
            border-right: 1px solid #a694b1;
            border-left: 1px solid #a694b1;
            /* border-bottom: 1px solid rgb(196, 90, 214); */
            background-color: #fff;
            background-size: cover;
            background-repeat: no-repeat;
            /* display: inline-block; */

        }

        .upload {
            display: block;
            width: 180PX;
            width: 120PX;
            border-radius: 0px;
            background-color: #577366;
            margin-top: -5px;
            color: #ffffff;
        }

        .imgUp {
            margin-bottom: 15px;
        }
    </style>
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
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
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
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
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
                        <h3 class="text-themecolor">Edit category</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="Category.php">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit category</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- End Page wrapper -->

            <!-- store -->
            <div class="container register">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-7 col-4 align-self-center"></div>
                        <div class="card-block">
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM category WHERE c_id = '" . $id . "' ";
                    $result = mysqli_query($connection, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                            $id = $row["c_id"];
                            $c_name = $row["c_name"];
                            $c_type =  $row["c_type"];
                            $check_box = $row["front_display"];
                            // echo $check_box;
                        }
                    } else {
                        echo "no result found";
                        //echo '<script>alert("No Results Found");</script>';
                        $c_name = "NO result found";
                        $c_type =  "NO result found";
                        $image_path = "NO result found";
                    }
                    // $connection->close();
                } else {
                    echo "no result found";
                    $c_name = "NO result found";
                    $c_type =  "NO result found";
                    $image_path = "NO result found";
                }
                ?>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class>Edit Category</h3>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b><label for="username">Category Name</label></b>
                                            <input type="text" name="c_name" class="form-control" placeholder="Category Name *" value=<?php echo $c_name; ?> readonly />
                                        </div>
                                        <?php echo $c_type; ?>
                                        <div class="form-group">
                                            <b><label for="username">Catogray Type</label></b>
                                            <select name="c_type" id="c_type" value=<?php echo $c_type; ?> required class="custom-select">
                                                <option value=<?php echo $c_type; ?>><?php echo $c_type; ?></option>
                                                <option value="Medicine">Medicine</option>
                                                <option value="Mediacal Divice">Mediacal Divice</option>
                                                <option value="Wellenss">Wellenss</option>
                                                <option value="Aurwedha">Aurwedha</option>
                                                <option value="Personal Care">Personal Care</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            if ($check_box == 1) {
                                            ?>
                                                <input type="checkbox" class="form-control" id="hometile" checked = "checked" name="hometile">
                                            <?php
                                            } else {
                                            ?>
                                                <input type="checkbox" class="form-control" id="hometile" name="hometile">
                                            <?php
                                            }
                                            ?>
                                            <b><label for="username">Home page Tile</label></b>
                                        </div>
                                        <div class="row" style="padding:10px;">
                                            <input type="submit" name="submit" value="Update" style="background-color: #55acee; width:200px" class="btn btn-danger">
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php
                            // Check if image file is a actual image or fake image
                            if (isset($_POST["submit"])) {

                                if (isset($_GET["id"])) {
                                    $id = $_GET["id"];
                                }


                                //uniqe name for image
                                $currentTimeinSeconds = time();
                                $currentDate = date('Y-m-d', time());
                                // $hometile = 1;
                                date_default_timezone_set("Asia/Colombo");
                                $currentDatetime = date("Y-m-d G:i:s", time());
                               
                                        if (!empty($_POST["c_type"])) {

                                            $c_type  = $_POST["c_type"];
                                            $hometile  = $_POST["hometile"];

                                            // echo $hometile;
                                            if (isset($_POST["hometile"])){
                                            if ($_POST["hometile"] == 'on') {
                                                $hometile = 1;
                                            } else {
                                                $hometile = 0;
                                            }
                                            }

                                            $sql = "UPDATE `category` SET `c_type` = '$c_type', `front_display`='$hometile', `time`='$currentDatetime'  WHERE `c_id` = '$id'";

                                            if ($connection->query($sql) === TRUE) {
                                                echo '<script>swal("Category Updated success!", "Category Updated !", "success").then (function(){
                                                    window.location = "Category.php" ;
                                                });
                                                    </script>';
                                            } else {
                                                echo '<script>swal("Category Updated Error!", "Error !", "error").then (function(){
                                                            window.location = "Category.php" ;
                                                        });
                                                            </script>';
                                            }

                                            $connection->close();
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
    </div>
    <!-- End store-->




    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    <script>
        $(".imgAdd").click(function() {
            $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del", function() {
            // 	to remove card
            $(this).parent().remove();
            // to clear image
            // $(this).parent().find('.imagePreview').css("background-image","url('')");
        });
        $(function() {
            $(document).on("change", ".uploadFile", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                    }
                }

            });
        });
    </script>



    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- <script>
        $("#hometile").change(function() {
            if(this.checked) {
                // alert('shakaboom');
                $(this).attr('checked', false);
            }else{
                $(this).attr('checked', true);
            }
});
       
       
        
    </script> -->

</body>

</html>