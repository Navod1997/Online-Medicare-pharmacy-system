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
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery_city</span></a>
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
                        <h3 class="text-themecolor">Edit Items </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="Store.php">Store</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Items</li>
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

                $id = $_GET["id"];

                $sql = "SELECT * FROM item WHERE item_id = '" . $id . "' ";
                $result = mysqli_query($connection, $sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    $id = $row["item_id"];
                    $item_name = $row["item_name"];
                    $category_type = $row["category_type"];
                    $discription =  $row["discription"];
                    $data_path = $row["data_path"];
                    $quantity = $row["quantity"];
                    $unit_price = $row["unit_price"];
                    $o_max_qut = $row["o_max_qut"];
                } else {

                    echo "no result found";
                    //echo '<script>alert("No Results Found");</script>';
                }



                ?>


                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class>Edit Item</h3>
                            <form method="POST" action="" enctype="multipart/form-data">

                                <div class="row register-form">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b><label for="username">Item Name *</label></b>
                                            <input type="text" name="item_name" class="form-control" placeholder="Iteam Name *" value=<?php echo $item_name; ?> readonly />
                                        </div>
                                        <div class="form-group">
                                            <b><label for="username">Category Type*</label></b>
                                            <select class="form-control" select name="category_type" id="category_type" required class="custom-select" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                                <option class="hidden" selected><?php echo $category_type; ?></option>


                                                <?php


                                                $sql = "SELECT c_name FROM category ";
                                                $result = mysqli_query($connection, $sql);



                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;

                                                        echo
                                                        ' 
                                                        
                                                                    <option value="' . $row["c_name"] . '">' . $row["c_name"] . '</option>
                                                               
                                                        
                                                        ';
                                                    }
                                                } else {

                                                    echo "no result found";
                                                    //echo '<script>alert("No Results Found");</script>';
                                                }




                                                ?>


                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <b><label for="username">Description *</label></b>
                                            <textarea rows="5" input type="text" name="discription" class="form-control form-control-line" required><?php echo $discription; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b><label for="username">Quantity *</label></b>
                                            <input type="text" name="quantity" class="form-control" placeholder="Quntity *" value=<?php echo $quantity; ?> oninput="this.value = this.value.replace(/[^1-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <b><label for="username">Unit Price *</label></b>
                                            <input type="text" name="unit_price" minlength="1" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Unit Price *" value=<?php echo $unit_price; ?> oninput="this.value = this.value.replace(/[^1-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <b><label for="username">The maximum quantity that the customer can choose *</label></b>
                                            <input type="text" name="o_max_qut" minlength="1" maxlength="2" maxnumber="10" name="txtEmpPhone" class="form-control" placeholder="maximum quantity *" value=<?php echo $o_max_qut; ?> oninput="this.value = this.value.replace(/[^1-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="" required />
                                        </div>

                                        <div class="form-group">


                                            <b><label for="username">Upload photo *</label></b>
                                            <div class="imgUp">
                                                <?php
                                                if (!empty($data_path)) {
                                                    $tmp_img = "../items/" . $data_path;
                                                    echo ' <div class="imagePreview" style="background-image:url(' . $tmp_img . ');"></div>';
                                                } else {
                                                    echo ' <div class="imagePreview"></div>';
                                                }
                                                ?>
                                                <label class="btn btn-deep-purple upload">
                                                    Upload<input type="file" class="uploadFile img" name="file" id="file_upload" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                                </label>
                                                <p class="card-text addbanner">
                                                <p>
                                            </div>





                                            <div class="row" style="padding:50px;">
                                                <input type="submit" name="update" value="Update Item" style="background-color: #55acee;" class="btn btn-danger">

                            </form>
                        </div>
                    </div>
                </div>




                <?php


                // Check if image file is a actual image or fake image
                // if (isset($_POST["update"])) {
                //     $name = $_FILES['file']['name'];
                //     $target_dir = "../items/";
                //     // move_uploaded_file($temp,"items/".$name);

                //     $target_file = $target_dir . basename($_FILES["file"]["name"]);
                //     // Select file type
                //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                //     // Valid file extensions
                //     $extensions_arr = array("jpg", "jpeg", "png");

                //     //uniqe name for image
                //     $currentTimeinSeconds = time();
                //     $currentDate = date('Y-m-d', time());
                //     $uniqname = $currentTimeinSeconds . $currentDate;
                //     $code = rand(10000, 99999);
                //     $name = $code . $uniqname . strstr($name, '.');
                //     $hometile = 1;
                //     date_default_timezone_set("Asia/Colombo");
                //     $currentDatetime = date("Y-m-d G:i:s", time());
                //     // $name="11".$uniqname.strstr($name, '.');
                //     // Check extension
                //     if (in_array($imageFileType, $extensions_arr)) {
                //         // Upload file
                //         if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
                //             if (!empty($_POST["item_name"] && $_POST["category_type"] && $_POST["discription"] && $_POST["quantity"] && $_POST["unit_price"] && $_POST["o_max_qut"])) {

                //                 $item_name  = $_POST["item_name"];
                //                 $category_type  = $_POST["category_type"];
                //                 $discription  = $_POST["discription"];
                //                 $quantity  = $_POST["quantity"];
                //                 $unit_price  = $_POST["unit_price"];
                //                 $o_max_qut = $_POST["o_max_qut"];
                //                 $data_path = $name;


                //                 $item_id = $_GET["id"];


                //                 $sql = "UPDATE item SET 

                //                                        category_type='$category_type',
                //                                         discription='$discription',
                //                                         quantity='$quantity',
                //                                         unit_price='$unit_price',
                //                                         o_max_qut='$o_max_qut',
                //                                         data_path='$name',
                //                                          WHERE item_id='$item_id'";


                //                 if ($connection->query($sql) === TRUE) {
                //                     echo '<script>swal("Item update success!", "update success success.!", "success").then (function(){
                //                                                 window.location = "Store.php" ;
                //                                             });
                //                                                 </script>';
                //                 } else {
                //                     echo "Error: " . $sql . "<br>" . $connection->error;
                //                 }

                //                 $connection->close();
                //             }
                //         } else {
                //             echo "Sorry, there was an error uploading your file.";
                //         }
                //     }
                // }

                if (isset($_POST["update"])) {

                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                    }
                    ////new items ////
                    $name = $_FILES['file']['name'];
                    $target_dir = "../items/";
                    // move_uploaded_file($temp,"items/".$name);

                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    // Valid file extensions
                    $extensions_arr = array("jpg", "jpeg", "png");

                    //uniqe name for image
                    $currentTimeinSeconds = time();
                    $currentDate = date('Y-m-d', time());
                    $uniqname = $currentTimeinSeconds . $currentDate;
                    $code = rand(10000, 99999);
                    $name = $code . $uniqname . strstr($name, '.');
                    $hometile = 1;
                    date_default_timezone_set("Asia/Colombo");
                    $currentDatetime = date("Y-m-d G:i:s", time());
                    // $name="11".$uniqname.strstr($name, '.');
                    // Check extension
                    if (in_array($imageFileType, $extensions_arr)) {
                        // Upload file
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["file_upload"]["name"])). " has been uploaded.";
                            // $imgpath = "items/". htmlspecialchars( basename( $_FILES["file_upload"]["name"]));

                                            $item_name  = $_POST["item_name"];
                                            $category_type  = $_POST["category_type"];
                                            $discription  = $_POST["discription"];
                                            $quantity  = $_POST["quantity"];
                                            $unit_price  = $_POST["unit_price"];
                                            $o_max_qut = $_POST["o_max_qut"];
                                            $data_path = $name;
                                            $item_id = $_GET["id"];
                                            $sql = "UPDATE item SET category_type='$category_type',discription='$discription',quantity='$quantity',unit_price='$unit_price',o_max_qut='$o_max_qut',data_path='$name'WHERE item_id=$item_id";

                               
                                if ($connection->query($sql) === TRUE) {
                                    echo '<script>swal("Item Updated success!", "Item Updated !", "success").then (function(){
                                        window.location = "Store.php" ;
                                    });
                                        </script>';
                                } else {
                                    echo '<script>swal("Item Updated Error!", "Error !", "error").then (function(){
                                                window.location = "Store.php" ;
                                            });
                                                </script>';
                                }

                                $connection->close();
                            
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

</body>

</html>