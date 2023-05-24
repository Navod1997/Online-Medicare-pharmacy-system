<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["email"])){
    
    
}
else{
    header("location:home_page.php");
}
// if(!isset($_SESSION['LoggedUser']))
//     {
//         header("location:login.php");
//     } else{
//         $cid = $_SESSION['LoggedUser'];
//     }
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>online pharmacy</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

     <!-- Header Section Begin -->
    <div class="navb1">
        <div class="header-top ">
         <nav class="navbar navbar-custom navbar-expand-md ">
            <div class="container">
                <div class="ht-left">
                </div>
                <?php
                if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!=""){
                    $name= $_SESSION["first_name"];

                    echo '<div class="ht-right">
                    <a href="my_account.php" class="login-panel">'.$name.'</a>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                <div class="lan-selector">
                </div>
            </div>
        </div>';
                
             } ?>
            </div>
        </div>


        <!-- search nave -->
        
        <div class="inner-header">
            <div class="container">
                <div class="row justify-content-md-center">
                <div class="row align-items-center">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="home_page.php">
                                <img src="img\slidephoto\logo1.png" alt="Medicare online pharmacy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">   
                            <div class="input-group">
                                <!-- <input type="text" placeholder="Search">
                                <button type="button"><i class="ti-search"></i></button> -->
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                        <a href="Prescription.php">
                        <img src="https://img.icons8.com/fluency-systems-filled/22/null/file-prescription.png"alt="Uplod Prescription"/>
                            </a>           
                            <li class="cart-icon">
                                <a href="testcheckout.php">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div> 

    <!-- catogory -->        
    <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
    </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                    <li><a href="medicine_list.php?type=Medicine">Medicine</a></li>
                        <li><a href="medicine_list.php?type=Mediacal Divice">Medical device</a></li>
                        <li><a href="medicine_list.php?type=Wellenss">Wellness</a></li>
                        <li><a href="medicine_list.php?type=Aurwedha">Ayurveda</a> </li>
                        <li><a href="medicine_list.php?type=Personal Care">Personal Care</a></li>
                        <li><a href="medicine_list.php?type=Other">Other</a></li>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- catogory End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more" style="max-width: 1240px; padding-bottom:80px;">
                        <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                        <span>prescrption</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- photo -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <img src="img\slidephoto\upload-steps.jpg" alt="..." >
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- prescription upload -->
    
    <div class="iteamfirst">
    <div class="container card-0 justify-content-center ">
    <div class="card-body px-sm-4 px-0">
    <form action="" enctype="multipart/form-data"  method="post"  >
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col">
                <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left"> Prescription Upload </h3>
                <p class="mt-md-4 ml-md-0 ml-2 text-center text-sm-left"> Please upload an image of your medical prescription issued by a SLMC registered doctor.</p>
                <p class="mt-md-4 ml-md-0 ml-2 text-center text-sm-left"> Prescription drugs will only be issued if a valid prescription image is provided.</p>
            </div>
        </div>
        <div class="row justify-content-center round">
        
            <div class="col-lg-10 col-md-12 ">
                <div class="card shadow-lg card-1">
                    <div class="card-body inner-card">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-12">


                                <?php 

                                    if(isset($_SESSION["user_id"])){
                                    $user_id = $_SESSION['user_id'];
                                    //echo $cat."<br><br>" ;


                                    $sql = "SELECT * FROM user WHERE user_id='".$user_id."'"; 
                                    $result = mysqli_query($connection, $sql);
                                    $row=mysqli_fetch_array($result);
                                        if($result->num_rows>0){

                                        $first_name = $row["first_name"];
                                        $last_name = $row["last_name"];
                                        $e_mail = $row["e_mail"];
                                        $city = $row["city"];



                                        if(isset($_SESSION['details_edit'])){

                                            $phone_number = $_SESSION["new_phone_number"];
                                            $address = $_SESSION["new_address"];
                                            // $city = $_SESSION["new_city"];

                                        }
                                        else{

                                            $phone_number = $row["phone_number"];
                                            $address = $row["address"];
                                            $city = $row["city"];
                                        }


                                        }

                                    }

                                ?>



                                <div class="form-group"><label for="first-name">First Name</label>
                                <input type="text" value="<?php echo $first_name;?>" class="form-control" name="first_name" id="first_name" > </div>

                                <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> 
                                    <input type="text" value="<?php echo $phone_number;?>" class="form-control"  name="new_phone_number" id="phone_number" minlength="1" maxlength="10"  oninput="this.value = this.value.replace(/[^1-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" > 
                                    <!-- <p  class="text-primary mb-0" onclick="edit_enable()"> -->
                                            <!-- <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span> -->
                                </div>

                                <div class="form-group"> <label for="address">Address</label> 
                                    <input type="text" value="<?php echo $address;?>" class="form-control" name="new_address"  id="address"  >
                                    <!-- <p  class="text-primary mb-0" onclick="edit_enable()"> -->
                                            <!-- <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span> -->
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"> <label for="last-name">Last Name</label> 
                                <input type="text" value="<?php echo $last_name;?>" class="form-control" name="last_name" id="last_name" > </div>

                                <div class="form-group"> <label for="email">E_mail</label> 
                                <input type="email" value="<?php echo $e_mail;?>" class="form-control" name="e_mail" id="e_mail"> </div>

                                <div class="form-group"> <label for="exampleFormControlTextarea2">City</label> 
                                    <select class="browser-default custom-select" select name="city" id="delivery">
                                    <option  selected ><?php echo $city;?></option>
                                                    
                                                    <?php 

                                                        include 'db_connection.php'; // connection



                                                        $sql = "SELECT city_name FROM delivary_citys "; 
                                                            $result = mysqli_query($connection, $sql);


                                                            
                                                            if($result->num_rows>0){
                                                                while($row=$result->fetch_assoc()){
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
                                    <!-- <p  class="text-primary mb-0" onclick="edit_enable()"> -->
                                        <!-- <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span></p> -->
                                </div>
                            </div>
                        </div>

                        <!-- <div class="container">
                        <div class="row justify-content-md-center"> 
                            <button class="site-btn login-btn" type="submit" name="Save_changes" id="update_details" style="display:none">Save Details</button><br><br>
                        </div>
                        </div> -->


                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10 col-12">
                            <div class="form-group"><p class="text-danger"> <label for="exampleFormControlTextarea2">Upload Prescription file</p></label> 
                            <div class="card">
                            <div class="card-body">
                                    <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                    <div class="absolute">
                                    <div class="row justify-content-md-center"> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> Attach your files here or Browse files </div>
                                    </div> 
                                </div>
                                <div class="row justify-content-md-center">
                                <input type="file" class="h-full w-full opacity-0" name="file" required></div>
                            </div>
                            </div>
                            <p>Select a JPG / PNG / PDF file. Once selected, your prescription image file is shown above.</p> 

                        </div>

                        <?php 

                        if(isset($_POST["Save_changes"])){

                            $_SESSION["details_edit"]= "details_updated";
                            $_SESSION["new_address"]  = $_POST["new_address"];
                            // $_SESSION["new_city"]  = $_POST["new_city"];
                            $_SESSION["new_phone_number"] = $_POST["new_phone_number"];

                            // echo "new  address is : ". $_SESSION["new_address"];
                            // echo '<br>';
                            // echo "new phone number is : ".$_SESSION["new_phone_number"];

                        }


                        ?>
                                                   
                                

                                <div class="row justify-content-center">
                                <div class="col-lg-12">
                                <div class="form-group"> <label for="exampleFormControlTextarea2">Delivery Method</label> 
                                <select class="browser-default custom-select" id="delivery" name="delivery_type">
                                            <!-- <option selected>Choose delivery method</option> -->
                                            <option value="takeaway">Pick Up</option>     
                                            <option value="cash_on_delivery">Cash on Delivery</option>
                                        </select>
                                </div>
                                </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <div class="row" style="padding:50px;">
                                        <input type="submit" name="submit" value="Upload Prescription" class="site-btn login-btn">
                                    </div>
                                </div>
                            
                    </div>
                </div>
            </div>
         
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>


       


    <?php 

                                            
                                   

         // Check if image file is a actual image or fake image
         if(isset($_POST["submit"])) {

            
        //     $target_dir = "kalhara/";
        //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        //     $uploadOk = 1;
        //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        //     if($check !== false) {
        //         echo "File is an image - " . $check["mime"] . ".";
        //         $uploadOk = 1;
        //     } else {
        //         echo "File is not an image.";
        //         $uploadOk = 0;
        //     }
            

        //     // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        //     }

        //     // Check file size
           

        //     // Allow certain file formats
        //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //     && $imageFileType != "gif" ) {
        //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //     $uploadOk = 0;
        //     }

        //     // Check if $uploadOk is set to 0 by an error
        //     if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        //     // if everything is ok, try to upload file
        //     } else {

        //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //         echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

        //         $imgpath = "kalhara/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
               
        //         if(!empty($_POST["c_type"] && $_POST["c_name"])){

        //             $c_type  = $_POST["c_type"];
        //             $c_name  = $_POST["c_name"];



        //             echo '<br>';
        //             echo $c_name;
        //             echo '<br>';

        //             echo $c_type;
        //             echo '<br>';

        //             echo $imgpath;

        //             include 'db_connection.php';

        //             $sql = "INSERT INTO prescription ( data_path)
        //             VALUES('".$c_name."', '".$c_type."', '".$imgpath."')" ;
                    
        //                     if ($connection->query($sql) === TRUE) {
        //                     echo "New record created successfully";
        //                     } else {
        //                     echo "Error: " . $sql . "<br>" . $connection->error;
        //                     }

        //                     $connection->close();



        //         }
               
               

               


        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        //     }

        ////new precription upload ////
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
      
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png");
    
        //uniqe name for image
        $currentTimeinSeconds = time();
        $currentDate = date('Y-m-d', time());
        $uniqname= $currentTimeinSeconds.$currentDate;
        $name=$_SESSION["user_id"].$uniqname.strstr($name, '.');
        // $name="11".$uniqname.strstr($name, '.');
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            // Upload file
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
                //echo'<script>alert("'.$name.'");</script>';
                // Insert record
            $user_id = $_SESSION["user_id"];
            $total ="0";   
            $first_name= $_POST["first_name"];
            $last_name =  $_POST["last_name"];
            $phone_number =  $_POST["new_phone_number"];
            $e_mail =  $_POST["e_mail"];
            $address =  $_POST["new_address"];
            $city =  $_POST["city"];
            $delivery_type =  $_POST["delivery_type"];
            $imgName = $name;


            //// insert order details////

            $orderInsert = "INSERT INTO `orders`( `user_id`, `status`, `address`, `first_name`, `last_name`, `phone_number`, `e_mail`, `delivery_type`, `city`, `orderType`, `prescriptionImg`) 
            VALUES ('".$user_id."','pending','".$address."','".$first_name."','".$last_name."','".$phone_number."','".$e_mail."','".$delivery_type."','".$city."','prescription','".$imgName."')";

                if ($connection->query($orderInsert) === TRUE) {

                    echo '<script>swal("Order success!", "Order success .!", "success").then (function(){
                        window.location = "home_page.php" ;
                    });
                        </script>';

                } else {
                echo "Error: ".  "<br>" . $connection->error;
                }

                            
           }
        }else{
            
            
            echo '<script>swal("Error!", "file type not support or something went wrong!", "error").then (function(){
                window.location = "Prescription.php" ;
            });
                </script>';
        }
     


        }
 

     ?>
     
 
    <!-- End prescription upload -->
    
    
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img\slidephoto\logo2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: No.11,Medhagoda,Matara,Sri Lanka</li>
                            <li>Phone: +971524518</li>
                            <li>Email: Medicarepharmacy@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="copyright-text">                        
                         Copyright &copy;<script>document.write(new Date().getFullYear());</script> Medicare.lk. All rights reserved.
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

  

    <script>

        $(document).on("click", ".browse", function() {
            var file = $(this)
                .parent()
                .parent()
                .parent()
                .find(".file");

            file.trigger("click");
        });

        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        
            var reader = new FileReader();
            reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        });

        


    </script>

    <script>

    $(document).ready(function(e) {
    $("#image-form").on("submit", function() {
    $("#msg").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');
        $.ajax({
                type: "POST",
                url: "prescription_save.php",
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false, // To send DOMDocument or non processed data file it is set to false

        success: function(data) {
                if (data == 1 || parseInt(data) == 1) {
                    $("#msg").html(
                    '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data updated successfully.</div>'
                    );
                } 
            else {
                    $("#msg").html(
                    '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> Extension not good only try with <strong>GIF, JPG, PNG, JPEG</strong>.</div>'
                    );
                }
        },
        error: function(data) {
                    $("#msg").html(
                    '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong.</div>'
                );
        }
        });
    });
    });
    </script>
    <script>

            function edit_enable(){

                
                document.getElementById('address').disabled = false;
                document.getElementById('phone_number').disabled = false;
                document.getElementById("update_details").style.display = '';

                swal("info", "Now you are able to edit address & contact details");
              // swal("Error!", "Incorrect email or password!", "error");

            }

        </script>


</body>

</html>